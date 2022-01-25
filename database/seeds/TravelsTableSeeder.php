<?php

use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++){
            $newTravel = new Travel();
            $newTravel->titolo = $faker->text(35);
            $newTravel->durata = $faker->text(15);
            $newTravel->partenza = $faker->text(25);
            $newTravel->destinazione = $faker->text(25);
            $newTravel->descrizione = $faker->text(65);
            $newTravel->prezzo = $faker->randomFloat(2, 10, 9999);
            $newTravel->save();
        }
    }
}
