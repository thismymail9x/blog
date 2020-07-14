<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{

    public function listBlog()
    {
        $categories = \App\Category::all();
        $blogs = \App\Blog::all();
        return view('layout.list', compact('blogs', 'categories'));

    }

    public function blogInformation($id)
    {
        $blog = Blog::findOrFail($id);
        return view('layout.blog', compact('blog'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $blogs = DB::table('blogs')->where('title', 'like', '%' . $keyword . '%')->get();
        return view('layout.search', compact('blogs'));
    }

    public function listBlogOfOneCategory($id)
    {
        $blogs = DB::table('blogs')->where('category_id', '=', $id)->get();
        return view('layout.list-blog-of-category', compact('blogs'));
    }
}
