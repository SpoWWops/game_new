<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jos van der Linden',
            'email' => 'josvanderlinden@live.nl',
            'password' => bcrypt('Test12'),
        ]);
    }
}
