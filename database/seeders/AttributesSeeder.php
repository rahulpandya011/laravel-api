<?php

namespace Database\Seeders;

use App\Models\Attributes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $at = new Attributes();
        $at->name = "Size";
        $at->save();

        $at1 = new Attributes();
        $at1->name = "Color";
        $at1->save();
    }
}
