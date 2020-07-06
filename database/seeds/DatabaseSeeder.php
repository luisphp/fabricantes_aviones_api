<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

// Hacemos uso del modelo User.
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
		$this->call('FabricanteSeeder');
        
        $this->call('AvionSeeder');

        User::truncate();
        
        // LLamamos al seeder de Users.
		$this->call('UserSeeder');
    }
}
