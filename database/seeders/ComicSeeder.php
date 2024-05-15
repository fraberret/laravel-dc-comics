<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics.comic');
        foreach ($products as $product) {
            $comic = new Comic();
            $comic->title = $product['title'];
            $comic->description = $product['description'];
            $comic->thumb = $product['thumb'];
            $comic->price = $product['price'];
            $comic->series = $product['series'];
            $comic->sale_date = $product['sale_date'];
            $comic->type = $product['type'];
            $comic->save();
        }
    }
}
