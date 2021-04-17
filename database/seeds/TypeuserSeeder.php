<?php

use Illuminate\Database\Seeder;
use App\Typeuser;

class TypeuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //Typeuser::truncate();

        Typeuser::create(['name' => 'Administrateur','code' =>"0"]);
        Typeuser::create(['name' => 'Manageur','code' =>"1"]);
        Typeuser::create(['name' => 'Opérateur','code' =>"2"]);
        Typeuser::create(['name' => 'Prévisionniste','code' =>"3"]);
    }
}
