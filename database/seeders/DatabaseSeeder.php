<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => 'sertis1',
                    'username' => 'sertis1',
                    'email' => 'sertis1@gmail.com',
                    'password' => Hash::make('sertis1'),
                ],
                [
                    'name' => 'sertis2',
                    'username' => 'sertis2',
                    'email' => 'sertis2@gmail.com',
                    'password' => Hash::make('sertis2'),
                ],
                [
                    'name' => 'sertis3',
                    'username' => 'sertis3',
                    'email' => 'sertis3@gmail.com',
                    'password' => Hash::make('sertis3'),
                ],
                [
                    'name' => 'sertis4',
                    'username' => 'sertis4',
                    'email' => 'sertis4@gmail.com',
                    'password' => Hash::make('sertis4'),
                ]
            ]
        );
    }
}
