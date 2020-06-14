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
            $path = $image->store('images', 'public');
            $blog->image = $path;
        } else {
            $blog->image = 'public/images/default.jpn';
        }
        $blog->user_id = 1;
        $blog->category_id = $request->category;
        $this->blogRepository->save($blog);
        toastr()->success('Bravo Success!');
    }

    public function find($id)
    {
        return $this->blogRepository->find($id);
    }

    public function edit($request, $blog)
    {
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $blog->image = $path;
        } else {
            $blog->image = 'public/images/default.jpn';
        }
        $blog->category_id = $request->category;
        $blog->content = $request->content;
        $this->blogRepository->save($blog);
        toastr()->info('Success Edit');
    }

    public function delete($blog)
    {
        $this->blogRepository->deleteBlog($blog);
        toastr()->success('Success Delete');
    }

    public function search($request)
    {
        $keyword = $request->keyword;
        return $this->blogRepository->search($keyword);
    }
}