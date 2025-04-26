<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'name' => 'Janet Wenzelburger',
            'review' => 'I like being able to schedule online. I have used VIP Junk Removal many times and the people that come are always courteous and do a great job.',
            'rating' => 5,
            'source' => 'Google Review',
            'avatar' => 'assets/images/v3/thumb4.png',
            'order' => 1,
            'is_active' => true,
        ]);

        Review::create([
            'name' => 'Kristin Hall',
            'review' => 'Super friendly and helpful staff. They went above and beyond. Kept me well informed of their timing. Helped clean up my driveway. Great service.',
            'rating' => 5,
            'source' => 'Google Review',
            'avatar' => 'assets/images/v3/thumb5.png',
            'order' => 2,
            'is_active' => true,
        ]);

        Review::create([
            'name' => 'Rhonny Barragan',
            'review' => 'VIP Junk Removal’s local teams are well-equipped to handle any size of decluttering job, allowing REALTORS® to focus on their clients and closing deals.',
            'rating' => 5,
            'source' => 'VP, Strategic Alliances',
            'avatar' => 'assets/images/v3/thumb6.png',
            'order' => 3,
            'is_active' => true,
        ]);
    }
}