<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Settings;
use App\Slider;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featureProducts = Product::where('featured', true)->active()->take(8)->inRandomOrder()->get();
        $sliders = Slider::where('status', true)->take(3)->get();
        $categories = Category::all();

        $data = [
          'featureProducts' => $featureProducts,
          'categories' => $categories,
          'sliders' => $sliders,
        ];
        return view('landing-page',$data);
    }
}
