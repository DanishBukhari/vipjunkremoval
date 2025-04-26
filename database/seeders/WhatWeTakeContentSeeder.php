<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhatWeTakeContent;

class WhatWeTakeContentSeeder extends Seeder
{
    public function run()
    {
        $sections = [
            [
                'section' => 'what-we-take-title',
                'title' => 'What we take as part of our junk pick-up services',
                'content' => null,
                'image' => null,
            ],
            [
                'section' => 'item-cards',
                'title' => 'Item Cards',
                'content' => json_encode([
                    'refrigerators' => [
                        'title' => 'Refrigerators & Freezers',
                        'items' => "- Top Freezer Refrigerators\n- Side-By-Side Refrigerators\n- French Door Refrigerators",
                        'image' => 'assets/images/pages/WWT_4card_icon_Fridge.svg',
                    ],
                    'mattresses' => [
                        'title' => 'Mattresses & Springboards',
                        'items' => "- Memory Foam Mattresses\n- Box Springs\n- Gel & Pillow Top Mattresses",
                        'image' => 'assets/images/pages/WWT_4card_icon_Mattress_0.svg',
                    ],
                    'furniture' => [
                        'title' => 'Furniture',
                        'items' => "- Couches\n- Filing Cabinets\n- Dining Tables\n- Dressers\n- Bookcases\n- Coffee Tables",
                        'image' => 'assets/images/pages/WWT_4card_icon_Sofa.svg',
                    ],
                    'televisions' => [
                        'title' => 'Televisions',
                        'items' => "- Flat Screen Televisions\n- Rear Projection TVs\n- DVD/Blu-Ray Players",
                        'image' => 'assets/images/pages/WWT_4card_icon_TV.svg',
                    ],
                ]),
                'image' => null,
            ],
            [
                'section' => 'accordion-title',
                'title' => 'Wondering if we can take your items?',
                'content' => 'Take a look at all the types of junk we remove.',
                'image' => null,
            ],
            [
                'section' => 'accordion-content',
                'title' => 'Accordion Content',
                'content' => json_encode([
                    'appliances' => [
                        'title' => 'Appliances',
                        'content' => "We take all types of appliances, below are some examples:\n- Air Conditioners\n- Dishwasher\n- Clothes Dryers\n- Freezers\n- Space Heaters\n- Stoves & Ovens\n- Water Heaters\n- Washing Machines\n- Blenders\n- Fans\n- Toasters\n- Microwaves",
                    ],
                    'household' => [
                        'title' => 'Household',
                        'content' => "We take all types of household related items, below are some examples:\n\n**BBQ & Grills**:\n- Old & Broken Grills\n- Used Charcoal\n\n**Carpet & Rugs**:\n- Floor Coverings\n- Wool Carpeting\n\n**Hot Tubs**:\n- Hot Tub Covers\n- Steel & Fiberglass Tubs\n\n**Yard Waste**:\n- Tree Trunks\n- Weeds & Plants\n\n**Household Trash**:\n- Organic Waste\n- Household Trash",
                    ],
                    'office-cleanouts' => [
                        'title' => 'Office Cleanouts',
                        'content' => "We take all types of office cleanout items, below are some examples:\n- Chairs\n- Desks\n- Computers\n- Storage devices\n- Laser or Inkjet Printers\n- Cabinets\n- Drawers\n- Couches\n- Books",
                    ],
                    'furniture' => [
                        'title' => 'Furniture',
                        'content' => "We take all types of furniture, below are some examples:\n- Couches\n- Sofa Beds\n- Dining Tables\n- Bookcases\n- Dressers\n- Beds\n- Coffee Tables\n- Outdoor/Patio Furniture",
                    ],
                    'mattress-springboards' => [
                        'title' => 'Mattress & Springboards',
                        'content' => "We take all types of mattresses & springboards, below are some examples:\n- Foam Mattresses\n- Box Springs\n- Gel & Pillow Top Mattresses\n- Memory Foam Mattresses",
                    ],
                    'renovation-construction' => [
                        'title' => 'Renovation & Construction',
                        'content' => "We take all types of renovation related items, below are some examples:\n\n**Renovation Waste**:\n- Concrete\n- Insulation\n\n**Glass**:\n- Broken Glass\n- Mirrors\n\n**Scrap Metals**:\n- Automotive Parts\n- Cast Iron",
                    ],
                    'refrigerators-freezers' => [
                        'title' => 'Refrigerators & Freezers',
                        'content' => "We take all types of fridges and freezers, below are some examples:\n- Top Freezer Refrigerators\n- Side-By-Side Refrigerators\n- Bottom Freezer Refrigerator\n- French Door Refrigerators\n- Compact Refrigerators\n- Mini Fridge & Freezers",
                    ],
                    'televisions-tv' => [
                        'title' => 'Televisions & TV',
                        'content' => "We take all types of televisions & TVs, below are some examples:\n- LED or LCD TVs\n- Plasma Televisions\n- Flat Screen Televisions\n- Smart TVs\n- DVD/Blu-Ray Players\n- Portable DVD Players\n- Projectors\n- Cables And Connectors\n- Remotes\n- TV Antennas\n- VCRs\n- Wall Mounts",
                    ],
                    'home-cleanouts' => [
                        'title' => 'Home Cleanouts',
                        'content' => "We take all types of home cleanout items, below are some examples:\n- Tenant move outs (when they leave junk behind)\n- Eviction cleanouts\n- Illegal dumping\n- Dumpster overflow\n- Storage room cleanouts\n- Community/Building junk days\n- Chairs",
                    ],
                    'junk-disposal' => [
                        'title' => 'What does VIP Junk Removal do with all the junk they remove?',
                        'content' => "We aim to donate and recycle as much as possible. We follow local laws and try to minimize landfill waste.",
                    ],
                    'exercise' => [
                        'title' => 'Exercise',
                        'content' => "We take all types of exercise equipment, below are some examples:\n\n**Bicycles**:\n- Mountain Bikes\n- Adult Tricycles\n\n**Treadmills**:\n- Stationary Bikes\n- Elliptical Trainers\n\n**Exercise Equipment**:\n- Barbells & Dumbells\n- Stair-Steppers",
                    ],
                    'electronics' => [
                        'title' => 'Electronics',
                        'content' => "We take all types of electronics, below are some examples:\n\n**Computer & Notebooks**:\n- Laptops And Notebooks\n- Desktop Computers\n\n**Printers, Scanners & Copiers**:\n- Laser or Inkjet Printers\n- 3D Printers & Print Medium",
                    ],
                    'recreation' => [
                        'title' => 'Recreation',
                        'content' => "We take all types of recreation related items, below are some examples:\n\n**Playsets & Trampolines**:\n- Large, Old & Broken Trampolines\n- Playground Equipment\n\n**Pool Tables**:\n- Snooker Tables\n- Pool or Billiard Tables",
                    ],
                    'bbq-grills' => [
                        'title' => 'BBQ & Grills',
                        'content' => "We take all types of BBQ & grills, below are some examples:\n- Old & Broken Grills\n- Used Charcoal\n- Outdoor & Portable Grills\n- Charcoal & Gas BBQs",
                    ],
                    'pianos' => [
                        'title' => 'Pianos',
                        'content' => "We take all types of pianos, below are some examples:\n- Grand or Baby Grand Pianos\n- Upright Pianos\n- Organs & Console Pianos\n- Digital Pianos & Keyboards\n- Parlor Pianos\n- Toy Pianos",
                    ],
                    'hot-tubs' => [
                        'title' => 'Hot Tubs',
                        'content' => "We take all types of hot tubs, below are some examples:\n- Hot Tub Covers\n- Steel & Fiberglass Tubs\n- Hot Tubs\n- Above Ground Spas",
                    ],
                    'tires-rubber' => [
                        'title' => 'Tires & Rubber',
                        'content' => "We take all types of tires & rubber, below are some examples:\n- Car & Truck Tires\n- Motorcycle Tires\n- Bicycle Tires\n- Rubber Parts\n- Heavy Duty Tires\n- All-Season & Touring Tires",
                    ],
                ]),
                'image' => null,
            ],
            [
                'section' => 'exceptions',
                'title' => 'We take everything except:',
                'content' => "- Chemicals, solvents & oils\n- Asbestos\n- Storage & oil drums\n- Oil & waste storage tanks\n\nNot sure if your items are non-hazardous? You can book a free, onsite estimate so we can see your items in person.\nOr, if you have questions about your items, give us a call: 973-810-6234",
                'image' => 'assets/images/tl3.png',
            ],
        ];

        foreach ($sections as $section) {
            WhatWeTakeContent::updateOrCreate(
                ['section' => $section['section']],
                $section
            );
        }
    }
}