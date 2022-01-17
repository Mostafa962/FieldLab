<?php

namespace User\Http\Controllers;
use Admin\Models\{
    Product,
    Slider,
};
class HomeController extends JsonResponse
{
    public function index()
    {
        $featured_products = Product::where('featured', 1)->select(['id', 'name', 'image', 'quotation'])->take(12)->get();
        $sliders = Slider::select(['id', 'title', 'image'])->get();
        return view('User::home.index', compact('featured_products', 'sliders'));
    }

}
