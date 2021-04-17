<?php

use App\User;
use App\Typeuser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=DB::table('users')->insert([
            'name' => 'admin',
            'prenom' => 'Fadi',
            'fonction' => 'Stagiaire',
            'departement'=>'DSRS',
            'service' =>'Sécurité',
            'division'=>'audit',
            'telephone'=>'+22670859490',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'typeusers_code'=>'0',
               
        ]);

        $manager=DB::table('users')->insert([
            'name' => 'manager',
            'prenom' => 'mariam',
            'fonction' => 'Stagiaire',
            'departement'=>'DSRS',
            'service' =>'Sécurité',
            'division'=>'audit',
            'telephone'=>'+22670859498',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager1234'),
            'typeusers_code'=>'1',
        ]);

         $operateur=DB::table('users')->insert([
            'name' => 'operateur',
            'prenom' => 'salif',
            'fonction' => 'Stagiaire',
            'departement'=>'DSRS',
            'service' =>'Sécurité',
            'division'=>'audit',
            'telephone'=>'+22671859498',
            'email' => 'operateur@gmail.com',
            'password' => Hash::make('operateur1234'),
            'typeusers_code'=>'2',
        ]);

          $previsionniste=DB::table('users')->insert([
            'name' => 'previsionniste',
            'prenom' => 'ali',
            'fonction' => 'Stagiaire',
            'departement'=>'DSRS',
            'service' =>'Sécurité',
            'division'=>'audit',
            'telephone'=>'+22678059498',
            'email' => 'previsionniste@gmail.com',
            'password' => Hash::make('previsionniste1234'),
            'typeusers_code'=>'3',
        ]);
    }
}
