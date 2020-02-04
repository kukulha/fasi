<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
        	'name' => 'Emmanuel Valenzuela',
        	'email' => 'emmanuel@kukulha.com',
        	'password' => Hash::make('vapo1908')
        ]);
    }
}
