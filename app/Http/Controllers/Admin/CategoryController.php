<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Session;
use Image;

class CategoryController extends Controller
{

    public function index()
    {
        $subcategories = Subcategory::with('category')->get();

        $data = [
            'title' => 'Category',
            'categories' => Category::all(),
            'subcategories' => $subcategories,
        ];
        return view('admin.categories.index',$data);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        if ($request->image){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            Image::make($image)->resize(131,123)->save('./uploads/categories/'.$fileName);

            $imageUrl = './uploads/categories/' . $fileName;
        }

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->image = $imageUrl;
        $category->slug = Str::slug($request->name);
        $category->save();

        Session::flash('success', 'Category created successfully');
        return redirect()->back();
    }


    public function edit($id)
    {

        $data = [
            'title' => 'Category',
            'category' => Category::find($id),
            'categories' => Category::all(),
        ];
        return view('admin.categories.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = Category::find($id);

        if ($request->image){
            unlink($category->image);
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            Image::make($image)->resize(131,123)->save('./uploads/categories/'.$fileName);

            $imageUrl = './uploads/categories/' . $fileName;
        }else{
            $imageUrl = $category->image;
        }

        $category->name = $request->name;
        $category->status = $request->status;
        $category->image = $imageUrl;
        $category->slug = Str::slug($request->name);
        $category->save();

        Session::flash('success', 'Category updated successfully');

        return redirect()->route('categories.index');
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'Category deleted successfully');

        return redirect()->back();
    }

}

