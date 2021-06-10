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
        for ($i = 0; $i < 20; $i++) {
            // Creazione istanza (record, row)
            $new_viaggio = new Plan();

            // Popolazione colonne
            $new_viaggio->title = 'Viaggio a Verona';
            $new_viaggio->description = 'Verona, capoluogo di provincia del Veneto, si trova nella pianura allo sbocco della valle dell\'Adige, ai piedi dei monti Lessini. Antico insediamento paleoveneto, la città divenne ricca e potente con i Romani, che ne apprezzarono la naturale posizione strategica, punto di passaggio verso il nord dell\'Europa.';
            $new_viaggio->days = rand(1, 10);
            $new_viaggio->price = rand(100, 1000);
            $new_viaggio->energy_rating = 'A';

            // Salvare record a db  
            $new_viaggio->save();
        }
    }
}
