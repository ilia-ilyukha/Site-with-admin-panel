<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['roles'] = \Spatie\Permission\Models\Role::all();
        
        return view('admin.users.roles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findById($id);        
        
        $data['role'] = $role;
        $data['permissions'] = Permission::all();
        $role_permissions = new Role;

        $data['role_permissions'] = $role_permissions->permissions;
       
// dd( $role->permissions->pluck('name'));
        return view('admin.users.roles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role_id)
    {
        $this->removeAllPermission($role_id);
        $role = Role::findById($role_id);   
        foreach($request->permissions as $permission){
            $role->givePermissionTo($permission);
        }    

        return redirect()->back()->withSuccess('Role has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function removeAllPermission($role_id){        
        $role = Role::findById($role_id);
        $permissions = $role->permissions->pluck('name');
        foreach($permissions as $permission){
            $role->revokePermissionTo($permission);
        }
    }
}
