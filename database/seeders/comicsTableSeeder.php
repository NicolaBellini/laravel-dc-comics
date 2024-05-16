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
        $comic = new Comic();
        $comic->slug=Helper::getSlug($comic->name, new Comic());
    }
}
