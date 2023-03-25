<?php

namespace Database\Seeders;

use App\Models\AttributeVariations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $av1 = new AttributeVariations();
        $av1->attribute_id = 1;
        $av1->name = "XL";
        $av1->save();

        $av2 = new AttributeVariations();
        $av2->attribute_id = 1;
        $av2->name = "L";
        $av2->save();

        $av3 = new AttributeVariations();
        $av3->attribute_id = 1;
        $av3->name = "M";
        $av3->save();


        $av1 = new AttributeVariations();
        $av1->attribute_id = 2;
        $av1->name = "Green";
        $av1->save();

        $av2 = new AttributeVariations();
        $av2->attribute_id = 2;
        $av2->name = "Red";
        $av2->save();

        $av3 = new AttributeVariations();
        $av3->attribute_id = 2;
        $av3->name = "Black";
        $av3->save();
    }
}
