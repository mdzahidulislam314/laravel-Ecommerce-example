<?php

namespace App\Http\Controllers\Admin;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use Session;

class CustomersController extends Controller
{

    public function index()
    {
        $data = [
            'customers' => Customer::all(),
            'title' => 'All Customers'
        ];

        return view('admin.customers.index',$data);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        Category::create([
            
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        Session::flash('success', 'Category created successfully');

        return redirect()->back();
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        Session::flash('success', 'Category updated successfully');

        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'Category deleted successfully');

        return redirect()->back();
    }

}

