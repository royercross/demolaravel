<?php

use HireMe\Entities\Categoria;

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		Categoria::create([
           'id'     => 1,
           'nombre'   => 'Desarrollador Backend',
           'slug'   => 'desarrolador-backend'
        ]);
        Categoria::create([
           'id'     => 2,
           'nombre'   => 'Desarrollador Frontend',
           'slug'   => 'desarrolador-frontend'
        ]);
        Categoria::create([
           'id'     => 3,
           'nombre'   => 'Diseñador',
           'slug'   => 'diseñador'
        ]);
	}

}