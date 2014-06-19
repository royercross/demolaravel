<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

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
                'password'          => \Hash::make(123456),
                'tipo'              => 'candidato'
            ]);

			Candidato::create([
                'id'            => $user->id,
                'pagina_web'    => $faker->url,
                'descripcion'   => $faker->text(200),
                'tipo_trabajo'  => $faker->randomElement(['tiempo_completo','parcial','freelancer']),
                'categoria_id'  => $faker->randomElement([1,2,3]),
                'disponible'    => true,
                'slug'          =>  \Str::slug($nombre_completo)
			]);
		}
	}

}