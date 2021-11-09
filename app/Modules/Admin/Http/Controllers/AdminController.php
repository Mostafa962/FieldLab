<?php

namespace Admin\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Admin\Http\Requests\Admin\{
    Store,
    Update,
    Trash
};

use Admin\Models\{
    Admin
};

class AdminController extends Controller
{
    public function index()
    {
        $MainTitle = 'Admins';
        $SubTitle = 'View';
        $admins = Admin::with('admin')->get();
        return view('Admin::admins.index', compact('MainTitle', 'SubTitle', 'admins'));
    }

    public function create()
    {
        $MainTitle = 'Admins';
        $SubTitle = 'Create';
        return view('Admin::admins.create', compact('MainTitle', 'SubTitle'));
    }

    public function store(Store $request)
    {
        DB::beginTransaction();
        try {
            Admin::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => bcrypt($request->input('password')),
                'privileges' => $request->input('privilege'),
            ]);
            DB::commit();
            session()->flash('_added', 'Admin has been created successfully');
            return redirect()->route('admins.admin.index');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error occurred, Please try again later!.');
        }
    }

    public function viewProfile()
    {
        $admin = auth('admin')->user();
        $MainTitle = 'Admins';
        $SubTitle = 'Update Profile';
        $url = route('admins.admin.profile');
        return view('Admin::admins.edit', compact('admin', 'MainTitle', 'SubTitle', 'url'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $MainTitle = 'Admins';
        $SubTitle = 'Edit ' . $admin->name . ' data';
        $url = route('admins.admin.update', $admin->id);
        return view('Admin::admins.edit', compact('admin', 'MainTitle', 'SubTitle', 'url'));
    }

    public function update(Update $request, $id)
    {
        $admin = Admin::findOrFail($id);
        DB::beginTransaction();
        try {
            Admin::where('id', $admin->id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'privileges' => $request->input('privilege'),
            ]);
            DB::commit();
            session()->flash('_updated', 'Admin data has been updated successfully');
            return redirect()->route('admins.admin.index');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error occurred, Please try again later!.');
        }
    }

    public function updateProfile(UpdateAdminProfile $request)
    {
        DB::beginTransaction();
        try {
            $admin = auth('admin')->user();
            $admin->fill([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'privileges' => $request->input('privilege'),
            ]);
            $admin->save();
            DB::commit();
            session()->flash('_updated', 'Admin data has been updated successfully');
            return redirect()->route('admins.admin.index');
        } catch (\Exception $exception) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error occurred, Please try again later!.');
        }
    }

    public function resetPassword(ChangeAdminPass $request)
    {
        DB::beginTransaction();
        try {
            $admin = Admin::findOrFail($request->resourceId);
            $admin->password = bcrypt($request->password);
            $admin->password_changed_by = auth('admin')->user()->id;
            $admin->save();
            DB::commit();
            return response()->json(['success' => 'Password was reset successfully!.']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['error' => 'Failed, Please try again later'], 400);
        }
    }

    public function trash(Trash $request)
    {
        DB::beginTransaction();
        try {
            // Find admin or fail
            $admin = Admin::where('id', '!=', 1)->where('id', '!=', auth('admin')->user()->id)->findOrFail($request->resource_id);

            // Update deleted by
            $admin->deleted_by = auth('admin')->user()->id;
            $admin->save();

            // Trash admin
            $admin->delete();
            DB::commit();
            return response()->json(['id' => $admin->id, 'success' => 'admin data moved to trash!']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['error' => 'Failed, Please try again later'], 400);
        }
    }

    public function trashed()
    {
        $MainTitle = 'Admins';
        $SubTitle = 'Trash';
        $admins = Admin::with('AdminWhoDeleted')->onlyTrashed()->get();
        return view('Admin::admins.trash', compact('MainTitle', 'SubTitle', 'admins'));
    }

    //hard delete
    public function destroy($id)
    {
        if ($id != 1) {
            Admin::where('id', $id)->forceDelete();
            return response()->json(['id' => $id, 'success' => 'Admin Data is successfully deleted']);
        }
        return response()->json(['error' => 'You can not delete the primary admin'], 400);
    }

    //restore an data from trash
    public function restore(Request $request)
    {
        DB::beginTransaction();
        try {
            $admin = Admin::onlyTrashed()->findOrFail($request->model_id);
            $admin->restore();
            DB::commit();
            return response()->json(['id' => $admin->id, 'success' => 'admin data restored successfully!.']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['error' => 'Failed, Please try again later'], 400);
        }
    }
}
