<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'super_admin';
        $user->password = Hash::make('12345678');
        $user->email = 'sudo1@gmail.com';
        $user->save();

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        
        $user->assignRole('super-admin');
        $permission = Permission::create(['name' => 'edit articles']);
    }
}
