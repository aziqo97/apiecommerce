<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create(["attribute_id" => 1,
            "name" => [
                "uz" => "Qizil",
                "ru" => "Красный"
            ]]);
        Value::create(["attribute_id" => 1,
            "name" => [
                "uz" => "Oq",
                "ru" => "Белый"
            ]]);
        Value::create(["attribute_id" => 1,
            "name" => [
                "uz" => "Qora",
                "ru" => "Чёрный"
            ]]);
        Value::create(["attribute_id" => 2,
            "name" => [
                "uz" => "Yogoch",
                "ru" => "Древесина"
            ]]);
        Value::create(["attribute_id" => 2,
            "name" => [
                "uz" => "Mato",
                "ru" => "Ткань"
            ]]);
    }
}
