<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'phone_number'=>'01667644567',
                'name'=>'Tintin',
                'email'=>'test@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'admin',
                'address'=>'uttara',
            ]
            );
    }
}
