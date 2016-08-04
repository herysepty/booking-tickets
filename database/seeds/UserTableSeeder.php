<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([[
                'firstname' => 'Hery',
                'lastname' => 'septy',
                'username' => 'Hery',
                'town' => 'Jakarta barat',
                'address' => 'Cengkareng Timur',
                'country' => 'Indonesia',
                'postcode' => '11730',
                'email' => 'heryspty@gmail.com',
                'password' => bcrypt('heryhery'),
            ],
            [
                'firstname' => 'hs',
                'lastname' => 'septy',
                'username' => 'Hery',
                'town' => 'Jakarta barat',
                'address' => 'Cengkareng Timur',
                'country' => 'Indonesia',
                'postcode' => '11730',
                'email' => 'herys@gmail.com',
                'password' => bcrypt('heryhery'),
            ]
            
            ]);
    }
}
