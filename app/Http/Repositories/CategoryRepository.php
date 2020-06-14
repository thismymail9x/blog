<?php


namespace App\Http\Repositories;


use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->all();

    }

    public function save($category)
    {
        $category->save();
    }

    public function find($id)
    {
        return $this->category->findOrFail($id);
    }

    public function delete($category)
    {
        DB::table('blogs')->where('category_id', '=', $category->id)->delete();
        $category->delete();
    }

}