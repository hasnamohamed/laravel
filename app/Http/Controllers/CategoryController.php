<?php

namespace App\Http\Controllers;

use App\Http\Requests\category\Store;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        // get list of the cateories 
        $categories = Category::all(); // SELECT * from categories;
        $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('category.list',['categories'=>$categories ]);
    }
    public function show($id)
    {
        //$brands=Category::with('brands')->find($id);
        $brands=Category::find($id)->brands;
        // dd($brands);
        // exit();
        $category = Category::findOrFail($id);
        if($category)
        return view('category.show',['category'=>$category ,'brands'=>$brands]);
        else
        return redirect()->route('categories.index')->with('error',' no such category');
    }
    public function create()
    {
        return view('category.create');
    }

    public function save(Store $request)
    {
    
        $category = new Category;
        $category -> name = $request['name'];
        $category->save(); // INSERT INTO TABLE 
        return redirect()->route('categories.index');
        // save new category
    }

    public function delete($id)
    {
        $category = Category::find($id);
        // $cateogry = Category::whereId($id)->get();
        //$category = Category::findOrFail($id);
        if($category)
        {
            
            $category -> delete();
        }
        return redirect()->route('categories.index')->with('success',' deleted successfully');

    }
}
