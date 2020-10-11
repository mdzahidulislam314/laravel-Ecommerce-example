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
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $sliders = Slider::where('status', true)->take(3)->get();
        $categories = Category::all();
        $settings = Settings::all();
        $settingsArr = [];
        foreach ($settings as $setting) {
            $settingsArr[$setting->key] = $setting->value;
        }

        $data = [
          'products' => $products,
          'categories' => $categories,
          'settings' => $settingsArr,
          'sliders' => $sliders,
        ];
        return view('landing-page',$data);
    }
}
