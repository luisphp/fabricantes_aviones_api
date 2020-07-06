<?php

use Illuminate\Database\Seeder;

// Hace uso del modelo de User.
use App\User;

	// Le indicamos que utilice también Faker.
	// Información sobre Faker: https://github.com/fzaninotto/Faker
	use Faker\Factory as Faker;

	

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		// Creamos una instancia de Faker
		$faker = Faker::create();
		
		User::create(
			[
				'name' => $faker->word(),
				'email'=>'test@test.es',
				'password'=> Hash::make('abc123')	//Cifrado de la contraseña abc123
			]);

	}
}