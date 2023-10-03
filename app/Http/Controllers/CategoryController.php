<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.categories.categories',['categories' => $categories]);
    }

    public function add()
    {
        return view('pages.categories.category-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);
        $category = Category::create($request->all());
        return redirect('/categories')->with('status','Category Added Succesfully!');
    }

    public function edit($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('pages.categories.category-edit',['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);
        $category = Category::where('slug',$slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('/categories')->with('status','Category Updated Succesfully!');
    }

    public function delete($slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('pages.categories.category-delete',['category' => $category]);
    }

    public function destroy($slug){
        $category = Category::where('slug',$slug)->first();
        $category->delete();
        return redirect('/categories')->with('status','Category Deleted Succesfully!');
    }

    public function deletedCategory(){
        $deletedCategory = Category::onlyTrashed()->get();
        return view('pages.categories.category-deleted',['deletedCategory'=>$deletedCategory]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug',$slug)->first();
        $category->restore();
        return redirect('/categories')->with('status','Category Restored Succesfully!');
    }
}
