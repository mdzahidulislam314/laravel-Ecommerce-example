<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $subcat = new Subcategory();
        $subcat->name = $request->name;
        $subcat->cat_id = $request->cat_id;
        $subcat->status = $request->status;
        $subcat->slug = Str::slug($request->name);
        $subcat->save();

        Session::flash('success', 'Sub Category created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Sub Category',
            'subcategory' => Subcategory::find($id),
            'subcategories' => Subcategory::all(),
            'categories' => Category::all(),
        ];

        return view('admin.categories.subcat-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $subcat = Subcategory::findOrFail($id);
        $subcat->name = $request->name;
        $subcat->cat_id = $request->cat_id;
        $subcat->status = $request->status;
        $subcat->slug = Str::slug($request->name);
        $subcat->save();

        Session::flash('success', 'SubCategory Updated successfully');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
