<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact1=DB::table('contacts')->insert([
             'nom' =>'OUEDRAOGO',
            'prenom' =>'Faridatou',
            'email' =>'Farida@gmail.com',
            'fonction' =>'chef de service réseau',
            'tel' =>'75263420',
               
        ]);

        $contact2=DB::table('contacts')->insert([
             'nom' =>'KI',
            'prenom' =>'Ali',
            'email' =>'ali@gmail.com',
            'fonction' =>'chef de service support',
            'tel' =>'78264420',
               
        ]);

         $contact3=DB::table('contacts')->insert([
             'nom' =>'PALE',
            'prenom' =>'Idrissa',
            'email' =>'pale@gmail.com',
            'fonction' =>'chef de service maintenance',
            'tel' =>'73214020',
        ]);
    }

}