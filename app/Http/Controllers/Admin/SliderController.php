<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Image;
use Session;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $data = [
            'sliders' => $sliders
        ];

        return view('admin.sliders.index',$data);
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
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($request->image){
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            Image::make($image)->resize(1920,440)->save('./uploads/sliders/'.$fileName);

            $imageUrl = './uploads/sliders/' . $fileName;
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->btn_text = $request->btn_text;
        $slider->btn_text = $request->btn_text;
        $slider->btn_link = $request->btn_link;
        $slider->btn_link = $request->btn_link;
        $slider->spacial_discount = $request->spacial_discount;
        $slider->orders = $request->orders;
        $slider->status = $request->status;
        $slider->image = $imageUrl;
        $slider->save();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        $image = $slider->image;
        if (is_file('/uploads/sliders/' . $image)) {
            unlink($image);
        }

        $slider->delete();
        Session::flash('success', 'Slider deleted successfully');

        return redirect()->back();
    }
}
