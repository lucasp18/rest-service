<?php

use Illuminate\Database\Seeder;

class TipoContatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TipoContato::class)->create(['descricao' => 'Particular']);
    	factory(App\TipoContato::class)->create(['descricao' => 'Trabalho']);
    	factory(App\TipoContato::class)->create(['descricao' => 'Familia']);
    	factory(App\TipoContato::class)->create(['descricao' => 'Amigos']);    	

    }
}
