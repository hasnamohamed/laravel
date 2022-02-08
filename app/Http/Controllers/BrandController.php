<?php

namespace App\Http\Controllers;

use App\Http\Requests\brand\Store;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list()
    {
        $brands = Brand::with('category')->get(); 
        return view('brands.list',['brands'=>$brands]);
    }
    public function show($id)
    {
        $brand= Brand::with('category')->find($id);
        $categories = Category::all();
        return view('brands.show',['categories'=>$categories ,'brand'=>$brand]);
    }

    public function create()
    {
        $categories = Category::all(); 
        return view('brands.create',['categories'=>$categories ]);
    }

    public function save(Store $request)
    {
        
        $brand = new Brand();
        $brand -> name = $request['name'];
        $brand -> des = $request['des'];
        if($request -> is_used=='on')
        $brand -> is_used = true;
        else
        $brand -> is_used = false;
        $brand -> cat_id = $request['cat_id'];
        $brand->save(); // INSERT INTO TABLE 
        return redirect()->route('brands.index');
        // save new category
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        if($brand)
        {
            $brand -> delete();
        }
        return redirect()->route('brands.index');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        $categories = Category::all(); 
        return view('brands.edit',['categories'=>$categories,'brand'=>$brand ]);
    }

    public function update(Store $request,$id)
    {
        $brand = Brand::find($id);
        $brand -> name = $request['name'];
        $brand -> des = $request['des'];
        if($request -> is_used=='on')
        $brand -> is_used = true;
        else
        $brand -> is_used = false;
        $brand -> cat_id = $request['cat_id'];
        $brand->save(); 
        return redirect()->route('brands.index');
    }
}
