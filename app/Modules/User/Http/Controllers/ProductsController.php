<?php

namespace User\Http\Controllers;

use Admin\Models\{
    Product,
};

class ProductsController extends JsonResponse
{
    public function index()
    {
        $records = Product::with(['category'])->select(['id', 'name', 'description', 'image'])->get();
        return view('User::products.index');
    }

    public function show($id, $name)
    {
        $record = Product::with(['category'])->select(['id', 'name', 'description', 'image'])->where('id', $id)->first();
        return view('User::products.show');
    }

}
