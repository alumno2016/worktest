<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user' => "test",
            'name' => "UserTest",
            'phone' => "0123456789",
            'address' => "Street 45 south -34",
            'email' => "test@admin.com",
            'password' => Hash::make('test1'),
        ]);
    }
}
