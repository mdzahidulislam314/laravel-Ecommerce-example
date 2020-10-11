<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        $data = [
            'brands' => $brand,
            'title' => 'Brands'
        ];

        return view('admin.brands.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

        if ($request->image){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            Image::make($image)->resize(131,123)->save('./uploads/brands/'.$fileName);

            $imageUrl = './uploads/brands/' . $fileName;
        }

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->image = $imageUrl;
        $brand->slug = Str::slug($request->name);
        $brand->save();

        Session::flash('success', 'Brand created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        $brands = Brand::all();
        $data = [
            'brand' => $brand,
            'brands' => $brands,
            'title' => 'Brands'
        ];

        return view('admin.brands.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $brand = Brand::find($id);

        if ($request->image){
            unlink($brand->image);
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            Image::make($image)->resize(131,123)->save('./uploads/brands/'.$fileName);

            $imageUrl = './uploads/brands/' . $fileName;
        }else{
            $imageUrl = $brand->image;
        }

        $brand->name = $request->name;
        $brand->image = $imageUrl;
        $brand->slug = Str::slug($request->name);
        $brand->save();

        Session::flash('success', 'Brand updated successfully');

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $image = $brand->image;
        if (is_file('/uploads/brands/' . $image)) {
            unlink($image);
        }
        $brand->delete();

        Session::flash('success', 'brand deleted successfully');

        return redirect()->back();
    }
}
