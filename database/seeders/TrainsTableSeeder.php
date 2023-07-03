<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i= 0; $i < 10; $i++){
            $newTrains = new Train();
            $newTrains ->azienda = $faker->company();
            $newTrains->stazione_partenza = $faker->city();            
            $newTrains->stazione_arrivo = $faker->city();           
            $newTrains->orario_partenza = $faker->time();           
            $newTrains->orario_arrivo = $faker->time();            
            $newTrains->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');            
            $newTrains->num_carrozze = $faker->randomNumber(3, false);        
            $newTrains->in_orario = $faker->boolean();    
            $newTrains->cancellato = $faker->boolean();            
            $newTrains->data_partenza = $faker->date();
            $newTrains->save();
        }
    }
}
