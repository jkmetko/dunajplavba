<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Adam Mocko',
            'email'     => 'adam.mocko@gmail.com',
            'password' => Hash::make('ZKDNJPLVB2016')
        ]);

        User::create([
            'name'      => 'Admin',
            'email'     => 'jakub.kmetko@3cky.sk',
            'password' => Hash::make('asdasd')
        ]);
    }
}
