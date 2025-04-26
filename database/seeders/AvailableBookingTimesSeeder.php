<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailableBookingTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timePeriods = [
            '8:00am - 10:00am',
            '8:30am - 10:30am',
            '9:00am - 11:00am',
            '9:30am - 11:30am',
            '10:00am - 12:00pm',
            '10:30am - 12:30pm',
            '11:00am - 1:00pm',
            '11:30am - 1:30pm',
            '12:00pm - 2:00pm',
            '12:30pm - 2:30pm',
            '1:00pm - 3:00pm',
            '1:30pm - 3:30pm',
            '2:00pm - 4:00pm',
            '2:30pm - 4:30pm',
            '3:00pm - 5:00pm',
        ];

        foreach ($timePeriods as $period) {
            DB::table('available_booking_times')->insert([
                'time_period' => $period,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
