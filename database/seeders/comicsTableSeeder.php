<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comic;
use App\functions\Helper;

class comicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');
        foreach ($data as $item) {
            $comic= new comic();
            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->type = $item['type'];
            $comic->artists = json_encode($item['artists']);
            $comic->writers = json_encode($item['writers']);
            $comic->slug = Helper::getSlug($comic->tile, new Comic());

            $comic->save();

        }

    }
}
