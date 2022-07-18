<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use \Spatie\Permission\Models\Role;

class UserPermissionController extends Controller
{
    public function index()
    {
        // $permission = Permission::create(['name' => 'edit articles']);
        $data['permissions'] = Permission::all();

        return view('admin.users.permissions.index', $data);
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->name = $request->name;
        $permission->save();

        return redirect()->back()->withSuccess('Permission has been updated!');
    }

    public function edit($id)
    {
        $data['permission'] = Permission::findById($id);

        return view('admin.users.permissions.edit', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.permissions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->name]);
        return redirect()->route('permissions')->withSuccess('Permission have been addes!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        // dd($permission);
        $permission->delete();
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        return redirect()->back()->withSuccess('Permission has been removed!');
    }
}
