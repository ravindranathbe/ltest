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
            'first_name' => 'Johnny',
            'last_name' => 'Cash',
            'name' => 'Johnny Cash',
            'email' => 'johnny@cash.com',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Frank',
            'last_name' => 'Sinatra',
            'name' => 'Frank Sinatra',
            'email' => 'frank@sinatra.com',
            'password' => bcrypt('123456')
        ]);
    }
}
