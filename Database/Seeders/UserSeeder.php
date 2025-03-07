<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->username = 'admin';
        $user->email = 'admin@adm.id';
        $user->password = Hash::make('123456');
        $user->save();
    }
}