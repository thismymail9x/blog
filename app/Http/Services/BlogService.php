<?php


namespace App\Http\Services;


use App\Blog;
use App\Http\Repositories\BlogRepository;

class BlogService
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        return $this->blogRepository->getAll();
    }

    public function createBlog($request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'pubic');
            $blog->image = $path;
        } else {
            $blog->image = 'public/images/default.jpn';
        }
        $this->blogRepository->save($blog);
        toastr()->success('Bravo Success!');
    }
}