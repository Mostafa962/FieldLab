<?php

namespace User\Http\Controllers;
use Illuminate\Http\Request;
use Admin\Models\{
    Product,
    Category,
};

class ProductsController extends JsonResponse
{
    public function index(Request $request)
    {
        $records = Product::with(['category'])
        ->when($request->query('c'), function ($query) use ($request) {
            return $query->where('category_id', $request->query('c'));
        })
        ->select(['id', 'name', 'quotation', 'image', 'pdf'])->paginate(12);

        $categories = Category::select(['id', 'name'])->get();
        
        return view('User::products.index', compact('records', 'categories'));
    }

    public function show($id, $name)
    {
        $record = Product::with(['category'])->select(['id', 'name', 'description', 'image', 'pdf', 'category_id'])->where('id', $id)->first();
        if(!$record)
            abort(404);
        $related_products = Product::where('category_id', $record->category_id)->where('id', '!=', $record->id)->select(['id', 'name', 'image', 'quotation'])->take(6)->get();
        return view('User::products.show', compact('record', 'related_products'));
    }

}
