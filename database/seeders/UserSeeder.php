<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

 
use Illuminate\Support\Facades\DB;
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
        // User::create([
        // 	'name'     => 'Md. Rafiqul Islam',
        // 	'email'    => 'rafiqul.pust.cse@gmail.com',
        // 	'role'     => 'admin',
        // 	'password' => Hash::make('admin123')
        // ]);
         DB::table('users')->insert([
            'name'     => 'Md. Rafiqul Islam',
           'email'     => 'rafiqul.pust.cse@gmail.com',
          	'role'     => 'admin',
        'password'     =>  Hash::make('admin123')
        ]);
    }
}
