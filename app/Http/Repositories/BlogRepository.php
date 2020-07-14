<?php


namespace App\Http\Repositories;


use App\Blog;
use App\Category;

class BlogRepository
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->all();

    }

    public function save($blog)
    {
        $blog->save();
    }

    public function find($id)
    {
        return $this->blog->findOrFail($id);
    }

    public function deleteBlog($blog)
    {
        $blog->delete();
    }

    public function search($keyword)
    {
        $result = $this->blog->where('title', 'like', '%' . $keyword . '%')->get();
        return $result;
    }
}