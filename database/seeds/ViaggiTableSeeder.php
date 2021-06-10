<?php

use Illuminate\Database\Seeder;
use App\Plan;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            // Creazione istanza (record, row)
            $new_viaggio = new Plan();

            // Popolazione colonne
            $new_viaggio->title = 'Viaggia con noi';
            $new_viaggio->description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis accusamus aut voluptate, eaque voluptates, recusandae, maxime distinctio at beatae dolore sequi et facilis veniam nisi impedit voluptatem? Laborum, porro quidem?';
            $new_viaggio->days = rand(1, 10);
            $new_viaggio->price = rand(100, 1000);
            $new_viaggio->energy_rating = 'A';


            // Salvare record a db  
            $new_viaggio->save();
        }
    }
}
