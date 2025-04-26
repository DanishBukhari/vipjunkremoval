<?php

namespace Database\Seeders;

use App\Models\Zipcode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZipcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zipcodes = [
            // Essex County['place_name' => 'Elizabeth', 'zip_code' => '07201'],
            ['place_name' => 'Linden', 'zip_code' => '07036'],
            ['place_name' => 'Plainfield', 'zip_code' => '07060'],
            ['place_name' => 'Summit', 'zip_code' => '07901'],
            ['place_name' => 'Berkeley Heights', 'zip_code' => '07922'],
            ['place_name' => 'Clark', 'zip_code' => '07066'],
            ['place_name' => 'Cranford', 'zip_code' => '07016'],
            ['place_name' => 'Hillside', 'zip_code' => '07205'],
            ['place_name' => 'Scotch Plains', 'zip_code' => '07076'],
            ['place_name' => 'Springfield', 'zip_code' => '07081'],
            ['place_name' => 'Union', 'zip_code' => '07083'],
            ['place_name' => 'Westfield', 'zip_code' => '07090'],
            ['place_name' => 'Fanwood', 'zip_code' => '07023'],
            ['place_name' => 'Garwood', 'zip_code' => '07027'],
            ['place_name' => 'Kenilworth', 'zip_code' => '07033'],
            ['place_name' => 'Mountainside', 'zip_code' => '07092'],
            ['place_name' => 'New Providence', 'zip_code' => '07974'],
            ['place_name' => 'Roselle', 'zip_code' => '07203'],
            ['place_name' => 'Roselle Park', 'zip_code' => '07204'],
            ['place_name' => 'Winfield', 'zip_code' => '07036'],
            ['place_name' => 'New Brunswick', 'zip_code' => '08901'],
            ['place_name' => 'Perth Amboy', 'zip_code' => '08861'],
            ['place_name' => 'South Amboy', 'zip_code' => '08879'],
            ['place_name' => 'Cranbury', 'zip_code' => '08512'],
            ['place_name' => 'East Brunswick', 'zip_code' => '08816'],
            ['place_name' => 'Edison', 'zip_code' => '08817'],
            ['place_name' => 'Monroe', 'zip_code' => '08831'],
            ['place_name' => 'North Brunswick', 'zip_code' => '08902'],
            ['place_name' => 'Old Bridge', 'zip_code' => '08857'],
            ['place_name' => 'Piscataway', 'zip_code' => '08854'],
            ['place_name' => 'Plainsboro', 'zip_code' => '08536'],
            ['place_name' => 'South Brunswick', 'zip_code' => '08852'],
            ['place_name' => 'Woodbridge', 'zip_code' => '07095'],
            ['place_name' => 'Carteret', 'zip_code' => '07008'],
            ['place_name' => 'Dunellen', 'zip_code' => '08812'],
            ['place_name' => 'Helmetta', 'zip_code' => '08828'],
            ['place_name' => 'Highland Park', 'zip_code' => '08904'],
            ['place_name' => 'Jamesburg', 'zip_code' => '08831'],
            ['place_name' => 'Metuchen', 'zip_code' => '08840'],
            ['place_name' => 'Middlesex', 'zip_code' => '08846'],
            ['place_name' => 'Milltown', 'zip_code' => '08850'],
            ['place_name' => 'Sayreville', 'zip_code' => '08872'],
            ['place_name' => 'South Plainfield', 'zip_code' => '07080'],
            ['place_name' => 'South River', 'zip_code' => '08882'],
            ['place_name' => 'Spotswood', 'zip_code' => '08884'],
            ['place_name' => 'East Orange', 'zip_code' => '07017'],
            ['place_name' => 'Newark', 'zip_code' => '07102'],
            ['place_name' => 'Orange', 'zip_code' => '07050'],
            ['place_name' => 'Irvington', 'zip_code' => '07111'],
            ['place_name' => 'Belleville', 'zip_code' => '07109'],
            ['place_name' => 'Bloomfield', 'zip_code' => '07003'],
            ['place_name' => 'Caldwell', 'zip_code' => '07006'],
            ['place_name' => 'Cedar Grove', 'zip_code' => '07009'],
            ['place_name' => 'Essex Fells', 'zip_code' => '07021'],
            ['place_name' => 'Fairfield', 'zip_code' => '07004'],
            ['place_name' => 'Glen Ridge', 'zip_code' => '07028'],
            ['place_name' => 'Livingston', 'zip_code' => '07039'],
            ['place_name' => 'Maplewood', 'zip_code' => '07040'],
            ['place_name' => 'Millburn', 'zip_code' => '07041'],
            ['place_name' => 'Montclair', 'zip_code' => '07042'],
            ['place_name' => 'North Caldwell', 'zip_code' => '07006'],
            ['place_name' => 'Nutley', 'zip_code' => '07110'],
            ['place_name' => 'Roseland', 'zip_code' => '07068'],
            ['place_name' => 'South Orange', 'zip_code' => '07079'],
            ['place_name' => 'Verona', 'zip_code' => '07044'],
            ['place_name' => 'West Caldwell', 'zip_code' => '07006'],
            ['place_name' => 'West Orange', 'zip_code' => '07052'],
            ['place_name' => 'Jersey City', 'zip_code' => '07302'],
        ];

        foreach ($zipcodes as $zipcode) {
            if (!Zipcode::where('zip_code', $zipcode['zip_code'])->exists()) {
                Zipcode::create([
                    'place_name' => $zipcode['place_name'],
                    'zip_code' => $zipcode['zip_code'],
                ]);
            }
        }
    }
}
