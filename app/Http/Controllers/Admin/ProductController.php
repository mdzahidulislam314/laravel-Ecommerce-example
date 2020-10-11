<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
use Session;
use Image;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $data = [
          'categories' => $categories,
          'brands' => $brands,
        ];
        return view('admin.products.create',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(217,219)->save('./uploads/products/'.$imageName);
            $imageUrl = './uploads/products/'.$imageName;
        }


        $files=[];

        if ($images = $request->hasFile('images')) {

            foreach ($request->images as $image) {

                $imagesName = $image->getClientOriginalName();
                Image::make($image)->resize(217,219)->save('./uploads/products/'.$imagesName);
                $imagesUrl = './uploads/products/'.$imagesName;

                $files[] = $imagesUrl;
            }
        }

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->details = $request->details;
        $product->price = $request->price;
        $product->brand_id = $request->brand_id;
        $product->cat_id = $request->cat_id;
        $product->spacial_price = $request->spacial_price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->image = $imageUrl;
        $product->images =json_encode($files);

        if (isset($request->featured)) {
            $product->featured = true;
        } else {
            $product->featured = false;
        }
        if (isset($request->is_enable)) {
            $product->is_enable = true;
        } else {
            $product->is_enable = false;
        }
        if (isset($request->hot_deal)) {
            $product->hot_deal = true;
        } else {
            $product->hot_deal = false;
        }

        $product->save();
        $product->categories()->attach($request->categories);
        Session::flash('success', 'Product created successfully');

        return redirect()->back();
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();

        $data = [
          'product' =>  $product,
          'brands' =>  $brands,
          'categories' =>  $categories,
        ];

        return view('admin.products.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $product = Product::find($id);
        $images = $request->hasFile('images');
        $slug  =  Str::slug($request->name);

        if ($request->hasFile('image')) {
            unlink($product->image);
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(217,219)->save('./uploads/products/'.$imageName);
            $imageLink = './uploads/products/'.$imageName;
        }else{
            $imageLink = $product->image;
        }

        $files=[];

        if ($images) {
            $images = json_decode($product->images);
            foreach ($images as $image){
                unlink($image);
            }

            foreach ($request->images as $image) {
                $imagesName = $image->getClientOriginalName();
                Image::make($image)->resize(217,219)->save('./uploads/products/'.$imagesName);
                $imagesUrl = './uploads/products/'.$imagesName;
                $files[] = $imagesUrl;
            }

        }else{
            $files = $product->images;
        }

        if (isset($request->featured)) {
            $product->featured = true;
        } else {
            $product->featured = false;
        }

        $product->name = $request->name;
        $product->slug = $slug;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->brand_id = $request->brand_id;
        $product->spacial_price = $request->spacial_price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->image = $imageLink;
        if ($images){
            $product->images =json_encode($files);
        }else{
            $product->images =$files;
        }
        if (isset($request->featured)) {
            $product->featured = true;
        } else {
            $product->featured = false;
        }
        if (isset($request->is_enable)) {
            $product->is_enable = true;
        } else {
            $product->is_enable = false;
        }
        if (isset($request->hot_deal)) {
            $product->hot_deal = true;
        } else {
            $product->hot_deal = false;
        }

        $product->save();
        $product->categories()->sync($request->categories);
        Session::flash('success', 'Product Updated successfully');

        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        $thum = file($product->image);
        $images = json_decode($product->images);

        if (isset($images)) {
            foreach ($images as $image) {
                unlink($image);
            }
        }

        if (isset($thum)){
            unlink($thum);
        }

        $product->delete();

        Session::flash('success', 'Product deleted successfully');

        return redirect()->back();
    }
}
