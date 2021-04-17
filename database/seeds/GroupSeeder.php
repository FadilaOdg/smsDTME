<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group1=DB::table('groups')->insert([
             'libelle' =>'Exploitant du RNI',
            'description' =>'',    
        ]);

        $group2=DB::table('groups')->insert([
             'libelle' =>'Exploitant du CRCO',
            'description' =>'',    
        ]);

        $group3=DB::table('groups')->insert([
             'libelle' =>'CRD',
            'description' =>'',    
        ]);
    }
}
