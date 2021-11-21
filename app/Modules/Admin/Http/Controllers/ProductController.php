<?php

namespace Admin\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Admin\Actions\Product\{
    StoreAction,
    UpdateAction,
    ToggleFeaturedAction,
    TrashAction,
    RestoreAction,
    DestroyAction,
};
use Admin\Http\Requests\Product\{
    StoreRequest,
    UpdateRequest,
    ToggleFeaturedRequest,
    RemoveRequest,
};

use Admin\Models\{
    Product,
    Category
};

class ProductController extends JsonResponse
{
    public function index()
    {
        $records = Product::with(['createdBy','category'])->select(['id','category_id','name','image','created_at','created_by','featured'])->get();
        return view('Admin::products.index', compact('records'));
    }

    public function create()
    {
        $categories = Category::select(['id','name'])->get();
        return view('Admin::products.create', compact('categories'));
    }

    public function store(StoreRequest $request, StoreAction $storeAction)
    {
        DB::beginTransaction();
        try {
            $storeAction->execute($request);
            DB::commit();
            return redirect()->route('admins.product.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function edit($id)
    {
        $record     = Product::findOrFail($id);
        $categories = Category::select(['id','name'])->get();
        return view('Admin::products.edit', compact('record', 'categories'));
    }

    public function update(UpdateRequest $request, UpdateAction $updateAction, $id)
    {

        DB::beginTransaction();
        try {
            $updateAction->execute($request, $id);
            DB::commit();
            return redirect()->route('admins.product.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function toggleFeatured(ToggleFeaturedRequest $request, ToggleFeaturedAction $toggleFeaturedAction)
    {
        DB::beginTransaction();
        try {
            $toggleFeaturedAction->execute($request);
            DB::commit();
            return $this->response(200, 'Product featured has been toggled successfully.', 200, [], 0 , []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }
    public function trash(RemoveRequest $request, TrashAction $trashAction)
    {
        DB::beginTransaction();
        try {
            $record =  $trashAction->execute($request);
            if(!$record)
                return $this->response(500, 'Failed, This product is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Product data moved to trash successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }

    public function trashed()
    {
        $records = Product::with(['deletedBy','category'])->select(['category_id','id','name','image','created_at','deleted_at','deleted_by'])->onlyTrashed()->get();
        return view('Admin::products.trash', compact('records'));
    }

    public function destroy(RemoveRequest $request, DestroyAction $destroyAction, $id)
    {
        DB::beginTransaction();
        try {
            $record =  $destroyAction->execute($request, $id);
            if(!$record)
                return $this->response(500, 'Failed, This product is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Product has been deleted successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }

    public function restore(RemoveRequest $request, RestoreAction $restoreAction)
    {
        DB::beginTransaction();
        try {
            $record =  $restoreAction->execute($request);
            DB::commit();
            return $this->response(200, 'Product has been restored successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }
}
