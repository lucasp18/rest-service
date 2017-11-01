<?php

use Illuminate\Database\Seeder;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Users::class)->create([
        	'email' => 'lucas2@teste.com.br',
        	'name' => 'Lucas2',
        	'password' => '1234567']);
    }
}
