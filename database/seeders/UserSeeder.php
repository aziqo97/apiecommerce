<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin =  User::create([
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@admin.com',
            'phone'=>'+998975774747',
            'password'=> Hash::make('123321'),
        ]);
      $admin->roles()->attach(1);

      User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
