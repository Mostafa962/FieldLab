<?php

namespace Admin\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Admin\Actions\Service\{
    StoreAction,
    UpdateAction,
    TrashAction,
    RestoreAction,
    DestroyAction,
};
use Admin\Http\Requests\Service\{
    StoreRequest,
    UpdateRequest,
    RemoveRequest,
};

use Admin\Models\{
    Service
};

class ServiceController extends JsonResponse
{
    public function index()
    {
        $records = Service::with('createdBy')->select(['id','title','description','image','created_at','created_by'])->get();
        return view('Admin::services.index', compact('records'));
    }

    public function create()
    {
        return view('Admin::services.create');
    }

    public function store(StoreRequest $request, StoreAction $storeAction)
    {
        DB::beginTransaction();
        try {
            $storeAction->execute($request);
            DB::commit();
            return redirect()->route('admins.service.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function edit($id)
    {
        $record = Service::findOrFail($id);
        return view('Admin::services.edit', compact('record'));
    }

    public function update(UpdateRequest $request, UpdateAction $updateAction, $id)
    {

        DB::beginTransaction();
        try {
            $updateAction->execute($request, $id);
            DB::commit();
            return redirect()->route('admins.service.index')->with('success','Data has been saved successfully.');
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
                return $this->response(500, 'Failed, This service is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Service data moved to trash successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }

    public function trashed()
    {
        $records = Service::with('deletedBy')->select(['id','title','description','image','created_at','deleted_at','deleted_by'])->onlyTrashed()->get();
        return view('Admin::services.trash', compact('records'));
    }

    public function destroy(RemoveRequest $request, DestroyAction $destroyAction, $id)
    {
        DB::beginTransaction();
        try {
            $record =  $destroyAction->execute($request, $id);
            if(!$record)
                return $this->response(500, 'Failed, This service is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Service has been deleted successfully.', 200, [], $record, []);
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
            return $this->response(200, 'Service has been restored successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }
}
