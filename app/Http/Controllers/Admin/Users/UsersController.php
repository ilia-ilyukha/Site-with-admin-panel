<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        $data['users'] = User::all();

        return view('admin.users.index', $data);
    }

    /**
     * Show the form for editing article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $user->givePermissionTo('add_edit_roles');

        $data['roles'] = \Spatie\Permission\Models\Role::all();
        $data['user_roles'] = $user->getRoleNames();
        $data['user'] = $user;
        
        return view('admin.users.edit', $data);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        if($request->password != null){
            $user->password = Hash::make($request->password);
        }        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->syncRoles($request->roles);

        $user->save();
        return redirect()->back()->withSuccess('User has been updated!');
    }
}