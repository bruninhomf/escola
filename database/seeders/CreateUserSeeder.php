<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('bruno');
        User::insert([[
            'id'        => 1,
            'name'      => 'Bruno Firmiano',
            'email'     => 'bruninhomf@msn.com',
            'password'  => $password,
        ]]);
    }
}
