<?php

namespace Admin\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Admin\Actions\Slider\{
    StoreAction,
    UpdateAction,
    TrashAction,
    RestoreAction,
    DestroyAction,
};
use Admin\Http\Requests\Slider\{
    StoreRequest,
    UpdateRequest,
    RemoveRequest,
};

use Admin\Models\{
    Slider
};

class SliderController extends JsonResponse
{
    public function index()
    {
        $records = Slider::with('createdBy')->select(['id','title','image','created_at','created_by'])->get();
        return view('Admin::sliders.index', compact('records'));
    }

    public function create()
    {
        return view('Admin::sliders.create');
    }

    public function store(StoreRequest $request, StoreAction $storeAction)
    {
        DB::beginTransaction();
        try {
            $storeAction->execute($request);
            DB::commit();
            return redirect()->route('admins.slider.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function edit($id)
    {
        $record = Slider::findOrFail($id);
        return view('Admin::sliders.edit', compact('record'));
    }

    public function update(UpdateRequest $request, UpdateAction $updateAction, $id)
    {

        DB::beginTransaction();
        try {
            $updateAction->execute($request, $id);
            DB::commit();
            return redirect()->route('admins.slider.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function trash(RemoveRequest $request, TrashAction $trashAction)
    {
        DB::beginTransaction();
        try {
            $record =  $trashAction->execute($request);
            if(!$record)
                return $this->response(500, 'Failed, This slider is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Slider data moved to trash successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }

    public function trashed()
    {
        $records = Slider::with('deletedBy')->select(['id','title','image','created_at','deleted_at','deleted_by'])->onlyTrashed()->get();
        return view('Admin::sliders.trash', compact('records'));
    }

    public function destroy(RemoveRequest $request, DestroyAction $destroyAction, $id)
    {
        DB::beginTransaction();
        try {
            $record =  $destroyAction->execute($request, $id);
            if(!$record)
                return $this->response(500, 'Failed, This slider is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Slider has been deleted successfully.', 200, [], $record, []);
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
            return $this->response(200, 'Data has been restored successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }
}
