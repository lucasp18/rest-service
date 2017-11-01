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
        factory(App\User::class)->create([
        	'email' => 'lucas2@teste.com.br',
        	'name' => 'Lucas2',
        	'password' => bcrypt('1234567')]);
    }
}
