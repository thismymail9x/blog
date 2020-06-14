<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        return view('category.list', compact('categories'));
    }

    public function showFormCreate()
    {
        return view('category.form-create');
    }

    public function create(CategoryRequest $categoryRequest)
    {
        $this->categoryService->createCategory($categoryRequest);
        return redirect()->route('category.index');
    }

    public function showFormEdit($id)
    {
        $category = $this->categoryService->find($id);
        return view('category.form-edit', compact('category'));
    }

    public function edit(CategoryRequest $categoryRequest, $id)
    {
        $category = $this->categoryService->find($id);
        $this->categoryService->edit($categoryRequest, $category);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $category = $this->categoryService->find($id);
        $this->categoryService->delete($category);
        return back();
    }
}
