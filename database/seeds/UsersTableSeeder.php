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
            'role' => 'Super Admin',
            'username' => 'administrator',
            'password' => bcrypt('rahasia123'),
            'nama' => 'Super Admin',
            'email' => 'admin@nore.web.id'
        ]);
    }
}
