<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                "name" => "shortcut",
                "type" => "website",
                "value" => "",
            ],
            [
                "name" => "title",
                "type" => "website",
                "value" => "Tamayoz",
            ],
            [
                "name" => "brand-type",
                "type" => "website",
                "value" => "0"
            ],
            [
                "name" => "brand",
                "type" => "website",
                "value" => ""
            ],
            [
                "name" => "web-type",
                "type" => "website",
                "value" => "0"
            ],
            [
                "name" => "phone",
                "type" => "website",
                "value" => "055-2289-866"
            ],
            [
                "name" => "address",
                "type" => "website",
                "value" => "Donec sollicitudin molestie malesuada.",
            ],
            [
                "name" => "mobile",
                "type" => "website",
                "value" => "0111-6608-822",
            ]
        ]);
    }
}
