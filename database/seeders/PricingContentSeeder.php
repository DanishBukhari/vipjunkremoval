<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingContent;

class PricingContentSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            [
                'section' => 'pricing-volume',
                'title' => 'We price based on volume',
                'content' => 'Our pricing is transparent and based on the amount of space your junk takes up in our trucks.',
                'image' => null,
            ],
            [
                'section' => 'single-item',
                'title' => 'Single Item',
                'content' => "When you have only one item to remove, we price the item individually based on size. (For example, a dresser would cost more than a microwave.) If you have more than 1 item, your price is based on truck volume.\n\nExamples of pieces with single-item prices:\n- Small appliances (microwave, toaster oven, etc)\n- Computer/computer monitor\n- Any size mattress\n- Any appliance (washer, dryer, BBQ grill, etc.)\n- Any furniture (sofa, bed frame, dining table, etc.)\n- Any type of TV",
                'image' => null,
            ],
            [
                'section' => 'multiple-items',
                'title' => 'Multiple Items',
                'content' => "It’s based on how much space your junk takes up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. We can give an exact price when we see the items on site.\n\nOur trucks hold roughly two tons of junk, which is the same as:\n- Eight standard sized refrigerators\n- Or, six full-sized three-seater sofas",
                'image' => null,
            ],
            [
                'section' => 'truck-capacity',
                'title' => 'What fits in the truck',
                'content' => "- **Minimum truckload**: <1.25ft long x 5ft high x 8ft wide. Great for spring cleaning.\n- **Medium truckload**: <1.25ft long x 5ft high x 8ft wide. Great for garage cleanouts.\n- **Full truckload**: 10ft long x 5ft high x 8ft wide. Great for big home moveouts.",
                'image' => null,
            ],
            [
                'section' => 'pricing-includes',
                'title' => 'Our prices include everything, all you have to do is point',
                'content' => "- Removal from anywhere—no need to move junk outside\n- Friendly team who are fully licensed and insured\n- All loading and clean-up\n- Disposal and environmental fees",
                'image' => 'assets/images/tl4.jpg',
            ],
            [
                'section' => 'pricing-estimates',
                'title' => 'How our free, onsite estimates work',
                'content' => "- Book online or call 1-855-886-8743.\n- We’ll call or text you 25-30 mins before we arrive to let you know we’re on our way.\n- We'll take a look at the junk and give you an all-inclusive, no-obligation price.\n- We'll remove your items, sweep up the area, and collect payment once we’re done.",
                'image' => 'assets/images/hs1.jpg',
            ],
        ];

        foreach ($sections as $section) {
            PricingContent::updateOrCreate(
                ['section' => $section['section']],
                $section
            );
        }
    }
}