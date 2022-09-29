<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "term_id" => "",
            "taxonomy" => "",
            "name" => "",
            "slug" => "",
            "term_group" => "",
            "term_order" => "",
            "term_taxonomy_id" => "",
            "description" => "",
            "parent" => "",
            "count" => "",
            "url" => "",
            "adress" => "",
            "map" => "",
            "area" => "",
            "active" => "",
            "english-name" => "",
            "urltitle" => "",
            "longitude" => "",
            "latitude'" => "",
            "start-date" => "",
            "military-number" => "",
            "callsign" => "",
            "urltitle" => "",
            "class" => "",
     ];
     DB::table('ships')->insert($param);
        $param = [
                       "term_id" => "",
            "taxonomy" => "",
            "name" => "",
            "slug" => "",
            "term_group" => "",
            "term_order" => "",
            "term_taxonomy_id" => "",
            "description" => "",
            "parent" => "",
            "count" => "",
            "url" => "",
            "adress" => "",
            "map" => "",
            "area" => "",
            "active" => "",
            "english-name" => "",
            "urltitle" => "",
            "longitude" => "",
            "latitude'" => "",
            "start-date" => "",
            "military-number" => "",
            "callsign" => "",
            "urltitle" => "",
            "class" => "",
     ];
DB::table('ships')->insert($param);
    }
}