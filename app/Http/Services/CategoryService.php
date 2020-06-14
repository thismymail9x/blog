<?php


namespace App\Http\Services;


use App\Category;
use App\Http\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    public function createCategory($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $this->categoryRepository->save($category);
        toastr()->success('Bravo Success!');
    }

    public function find($id)
    {
        return $this->categoryRepository->find($id);
    }

    public function edit($request, $category)
    {
        $category->name = $request->name;
        $this->categoryRepository->save($category);
        toastr()->info('Success Edit');
    }

    public function delete($category)
    {
        $this->categoryRepository->delete($category);
        toastr()->success('Success Delete');
    }
}