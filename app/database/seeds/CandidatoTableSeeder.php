<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use HireMe\Entities\User;
use HireMe\Entities\Candidato;

class CandidatoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
            $nombre_completo = $faker->name;

            $user = User::create([
                'nombre_completo'   => $nombre_completo,
                'email'             => $faker->email,
                'password'          => '123456',
                'tipo'              => 'candidato'
            ]);

			Candidato::create([
                'id'            => $user->id,
                'pagina_web'    => $faker->url,
                'descripcion'   => $faker->text(200),
                'tipo_trabajo'  => $faker->randomElement(['Tiempo Completo','Parcial','Freelancer']),
                'categoria_id'  => $faker->randomElement([1,2,3]),
                'disponible'    => true,
                'slug'          =>  \Str::slug($nombre_completo)
			]);
		}
	}

}