<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beer;
use App\Functions\Helper;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_string = file_get_contents('https://api.sampleapis.com/beers/ale');
        // dump($data_string);

        $beers = json_decode($data_string);

        foreach( $beers as $beer ){
            $new_beer = new Beer();
            $new_beer->name = $beer->name;
            $new_beer->slug = Helper::generateSlug($beer->name, Beer::class);
            $new_beer->price = $beer->price;
            $new_beer->average = $beer->rating->average;
            $new_beer->image = $beer->image;
            $new_beer->save();

            dump($beers);

        }
    }
}
