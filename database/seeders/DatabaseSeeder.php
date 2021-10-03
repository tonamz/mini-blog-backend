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

        DB::table('articles')->insert([
            [
                "name"  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "1",
                "author" => "1"
            ],
            [
                "name"  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "1",
                "author" => "2"
            ],
            [
                "name"  => "There are many variations of passages of Lorem Ipsum available",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "3",
                "author" => "3"
            ],
            [
                "name"  => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "2",
                "author" => "4"
            ],
            [
                "name"  => "making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "1",
                "author" => "1"
            ],
            [
                "name"  => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from",
                "content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form",
                "status" => "1",
                "category" => "2",
                "author" => "1"
            ]
        ]
    );
    }
}
