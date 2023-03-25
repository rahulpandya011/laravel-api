<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pd1 = new Products();
        $pd1->name = "Product 1";
        $pd1->quantity = 100;
        $pd1->price = 200.20;
        $pd1->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd1->save();


        $pd2 = new Products();
        $pd2->name = "Product 2";
        $pd2->quantity = 200;
        $pd2->price = 100.20;
        $pd2->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd2->save();

        $pd3 = new Products();
        $pd3->name = "Product 3";
        $pd3->quantity = 250;
        $pd3->price = 1006.20;
        $pd3->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd3->save();

        $pd4 = new Products();
        $pd4->name = "Product 4";
        $pd4->quantity = 250;
        $pd4->price = 1006.20;
        $pd4->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd4->save();

        $pd5 = new Products();
        $pd5->name = "Product 5";
        $pd5->quantity = 60;
        $pd5->price = 40.20;
        $pd5->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd5->save();

        $pd6 = new Products();
        $pd6->name = "Product 6";
        $pd6->quantity = 150;
        $pd6->price = 1020;
        $pd6->image = "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1";
        $pd6->save();
    }
}
