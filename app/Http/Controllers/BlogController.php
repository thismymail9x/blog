<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\Request;

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

    public function showFormEdit($id)
    {
        $categories = Category::all();
        $blog = $this->blogService->find($id);
        return view('blog.form-edit', compact('blog', 'categories'));
    }

    public function edit(BlogRequest $blogRequest, $id)
    {
        $blog = $this->blogService->find($id);
        $this->blogService->edit($blogRequest, $blog);
        return redirect()->route('blog.index');
    }

    public function delete($id)
    {
        $blog = $this->blogService->find($id);
        $this->blogService->delete($blog);
        return back();
    }

    public function search(Request $request )
    {
       $result = $this->blogService->search($request);
       return response()->json([
           'status'=>'success',
           'data'=>$result
       ]);
    }
}
