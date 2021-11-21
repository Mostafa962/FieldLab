<?php

namespace Admin\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Admin\Actions\Admin\{
    StoreAction,
    UpdateAction,
    TrashAction,
    RestPasswordAction,
    RestoreAction,
    DestroyAction,
};
use Admin\Http\Requests\Admin\{
    StoreRequest,
    UpdateRequest,
    RemoveRequest,
    ResetPasswordRequest,
};

use Admin\Models\{
    Admin
};

class AdminController extends JsonResponse
{
    public function index()
    {
        $records = Admin::with('createdBy')->select(['id','name','phone','email','created_at','created_by'])->get();
        return view('Admin::admins.index', compact('records'));
    }

    public function create()
    {
        return view('Admin::admins.create');
    }

    public function store(StoreRequest $request, StoreAction $storeAction)
    {
        DB::beginTransaction();
        try {
            $storeAction->execute($request);
            DB::commit();
            return redirect()->route('admins.admin.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }

    public function edit($id)
    {
        $record = Admin::findOrFail($id);
        return view('Admin::admins.edit', compact('record'));
    }

    public function update(UpdateRequest $request, UpdateAction $updateAction, $id)
    {

        DB::beginTransaction();
        try {
            $updateAction->execute($request, $id);
            DB::commit();
            return redirect()->route('admins.admin.index')->with('success','Data has been saved successfully.');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error','Failed, Please try again later.')->withInput();
        }
    }


    public function resetPassword(ResetPasswordRequest $request, RestPasswordAction $restPassAction)
    {
        DB::beginTransaction();
        try {
            $restPassAction->execute($request);
            DB::commit();
            return $this->response(200, 'Password was reset successfully.', 200, [], 0, []);
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
                return $this->response(500, 'Failed, This admin is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Admin data moved to trash successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }

    public function trashed()
    {
        $records = Admin::with('deletedBy')->select(['id','name','phone','email','created_at','deleted_at','deleted_by'])->onlyTrashed()->get();
        return view('Admin::admins.trash', compact('records'));
    }

    public function destroy(RemoveRequest $request, DestroyAction $destroyAction, $id)
    {
        DB::beginTransaction();
        try {
            if ($id === 1) 
                return $this->response(500, 'Failed, You can not delete this admin.', 200, [], 0, []);
            $record =  $destroyAction->execute($request, $id);
            if(!$record)
                return $this->response(500, 'Failed, This admin is not found .', 200, [], 0, []);
            DB::commit();
            return $this->response(200, 'Admin has been deleted successfully.', 200, [], $record, []);
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
            return $this->response(200, 'Admin has been restored successfully.', 200, [], $record, []);
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->response(500, 'Failed, Please try again later.', 200, [], 0, []);
        }
    }
}
