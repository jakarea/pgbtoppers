<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'info@maatweb.nl')->exists()) {
            $user = new User();
            $user->name = 'Maatweb';
            $user->email = 'info@maatweb.nl';
            $user->password = Hash::make('bkzp7khwz');
            $user->save();
        }


    }
}
