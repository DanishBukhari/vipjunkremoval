<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeContent;

class HomeContentSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            [
                'section' => 'hero',
                'title' => 'VIP Junk Removal',
                'content' => 'We make junk disappear with fast, reliable, and eco-friendly removal services.',
                'image' => 'home-images/hero.jpg',
            ],
            [
                'section' => 'features',
                'title' => 'Why Choose Us',
                'content' => 'Reliable, eco-friendly, and hassle-free junk removal services.',
                'image' => null,
            ],
            [
                'section' => 'help',
                'title' => 'What can we help you with?',
                'content' => 'From household junk to business cleanouts, we handle it all.',
                'image' => null,
            ],
            [
                'section' => 'home-pickup',
                'title' => 'Leave the heavy lifting to us',
                'content' => 'Schedule a pickup and let our team take care of the rest.',
                'image' => 'home-images/loading.jpg',
            ],
            [
                'section' => 'what-we-take',
                'title' => 'What we take',
                'content' => 'We can take just about anything, as long as it’s non-hazardous and can be lifted by our two strong team members.',
                'image' => 'home-images/what-we-do.mp4',
            ],
            [
                'section' => 'what-we-take-items',
                'title' => 'Wondering if we can take your items?',
                'content' => 'Take a look at all the types of junk we remove.',
                'image' => null,
            ],
            [
                'section' => 'what-we-take-exceptions',
                'title' => 'We take everything except:',
                'content' => "- Chemicals, solvents & oils\n- Asbestos\n- Storage & oil drums\n- Oil & waste storage tanks\n\nNot sure if your items are non-hazardous? Book a free, onsite estimate or call us at 973-810-6234.",
                'image' => 'home-images/tl3.png',
            ],
            [
                'section' => 'business-pickup',
                'title' => 'Convenient, reliable junk removal for businesses',
                'content' => 'Efficient junk removal solutions for commercial spaces.',
                'image' => 'home-images/j2.png',
            ],
            [
                'section' => 'who-we-serve',
                'title' => 'Who we serve',
                'content' => 'Serving homeowners, businesses, and property managers.',
                'image' => null,
            ],
            [
                'section' => 'pricing',
                'title' => 'We price by single item or by truck volume',
                'content' => 'For 2 or more items, we price by volume, which is how much space your junk takes up in the truck. Rates start at our minimum charge for very small loads up to a full truckload. If you have only one item, we do offer single item pricing.',
                'image' => 'home-images/tc1.png',
            ],
            [
                'section' => 'pricing-volume',
                'title' => 'We price based on volume',
                'content' => 'Our pricing is transparent and based on the amount of space your junk takes up in our trucks.',
                'image' => null,
            ],
            [
                'section' => 'single-item-pricing',
                'title' => 'Single item pricing',
                'content' => "When you have only one item to remove, we price the item individually based on size. Examples of pieces with single-item prices:\n- Small appliances (microwave, toaster oven, etc)\n- Computer/computer monitor\n- Any size mattress\n- Any appliance (washer, dryer, BBQ grill, etc.)\n- Any furniture (sofa, bed frame, dining table, etc.)\n- Any type of TV",
                'image' => 'home-images/couch.svg',
            ],
            [
                'section' => 'multiple-items-pricing',
                'title' => 'Multiple items? We price by volume.',
                'content' => "It’s based on how much space your junk takes up in the truck. We have a minimum charge for very small loads; from there, prices go from 1/8th of a truck up to a full truckload. Our trucks hold roughly two tons of junk, which is the same as:\n- Eight standard sized refrigerators\n- Or, six full-sized three-seater sofas",
                'image' => 'home-images/truck.png',
            ],
            [
                'section' => 'pricing-truck',
                'title' => 'What fits in the truck',
                'content' => "- **Minimum truckload**: <1.25ft long x 5ft high x 8ft wide. Great for spring cleaning.\n- **Medium truckload**: <1.25ft long x 5ft high x 8ft wide. Great for garage cleanouts.\n- **Full truckload**: 10ft long x 5ft high x 8ft wide. Great for big home moveouts.",
                'image' => null,
            ],
            [
                'section' => 'pricing-includes',
                'title' => 'Our prices include everything, all you have to do is point',
                'content' => "- Removal from anywhere—no need to move junk outside\n- Friendly team who are fully licensed and insured\n- All loading and clean-up\n- Disposal and environmental fees",
                'image' => 'home-images/tl4.jpg',
            ],
            [
                'section' => 'pricing-estimates',
                'title' => 'How our free, onsite estimates work',
                'content' => "- Book online or call 1-855-886-8743.\n- We’ll call or text you 25-30 mins before we arrive to let you know we’re on our way.\n- We'll take a look at the junk and give you an all-inclusive, no-obligation price.\n- We'll remove your items, sweep up the area, and collect payment once we’re done.",
                'image' => 'home-images/hs1.jpg',
            ],
            [
                'section' => 'repurposing',
                'title' => 'Repurposing your items for good',
                'content' => 'Once your items are loaded into the truck, their repurposing journey begins. For us, repurposing means recycling the recyclables and donating the donatables, so as much junk as possible is diverted from landfills.',
                'image' => 'home-images/repurpose.jpg',
            ],
            [
                'section' => 'testimonials',
                'title' => "Don't just take our word for it",
                'content' => 'Real customer reviews, typos and all ;)',
                'image' => null,
            ],
            [
                'section' => 'cta',
                'title' => 'We make junk disappear',
                'content' => '24/7 Customer Service 973-810-6234',
                'image' => 'home-images/removal.png',
            ],
        ];

        foreach ($sections as $section) {
            HomeContent::updateOrCreate(
                ['section' => $section['section']],
                $section
            );
        }
    }
}