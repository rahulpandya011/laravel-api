<?php

namespace Database\Seeders;

use App\Models\ProductVariations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pw = new ProductVariations();
        $pw->product_id = 1;
        $pw->attributes_variation_id = 1;
        $pw->save();

        $pw1 = new ProductVariations();
        $pw1->product_id = 1;
        $pw1->attributes_variation_id = 4;
        $pw1->save();

        $pw2 = new ProductVariations();
        $pw2->product_id = 2;
        $pw2->attributes_variation_id = 2;
        $pw2->save();

        $pw3 = new ProductVariations();
        $pw3->product_id = 2;
        $pw3->attributes_variation_id = 5;
        $pw3->save();

        $pw4 = new ProductVariations();
        $pw4->product_id = 3;
        $pw4->attributes_variation_id = 3;
        $pw4->save();

        $pw5 = new ProductVariations();
        $pw5->product_id = 3;
        $pw5->attributes_variation_id = 6;
        $pw5->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 4;
        $pw6->attributes_variation_id = 6;
        $pw6->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 4;
        $pw6->attributes_variation_id = 2;
        $pw6->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 5;
        $pw6->attributes_variation_id = 5;
        $pw6->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 5;
        $pw6->attributes_variation_id = 3;
        $pw6->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 6;
        $pw6->attributes_variation_id = 4;
        $pw6->save();

        $pw6 = new ProductVariations();
        $pw6->product_id = 6;
        $pw6->attributes_variation_id = 3;
        $pw6->save();
    }
}
