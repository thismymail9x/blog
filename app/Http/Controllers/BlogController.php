<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('blog.list', compact('blogs'));
    }

    public function showFormCreate()
    {
        $categories = Category::all();
        return view('blog.form-create', compact('categories'));
    }

    public function create(BlogRequest $request)
    {
        $this->blogService->createBlog($request);
        return redirect()->route('blog.index');
    }
}
