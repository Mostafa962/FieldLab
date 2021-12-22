<?php

namespace User\Http\Controllers;
use Admin\Models\{
    Product,
};
class HomeController extends JsonResponse
{
    public function index()
    {
        $featured_products = Product::where('featured', 1)->select(['id', 'name', 'image', 'quotation'])->take(12)->get();
        return view('User::home.index', compact('featured_products'));
    }

}
