<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create(["name" => "material"]);
        Attribute::create(["name" => "color"]);
        Attribute::create(["name" => "size"]);
    }
}
