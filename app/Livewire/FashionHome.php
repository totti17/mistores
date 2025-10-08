<?php

namespace App\Livewire;

use Livewire\Component;

class FashionHome extends Component
{
    public function render()
    {
        $collections = [
            [
                'name' => 'Urban Essentials',
                'description' => 'Effortless silhouettes in muted tones designed for every city moment.',
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=80',
            ],
            [
                'name' => 'Runway Icons',
                'description' => 'Statement pieces inspired by couture houses and reimagined for daily wear.',
                'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80',
            ],
            [
                'name' => 'Weekend Retreat',
                'description' => 'Relaxed tailoring, airy fabrics, and refined textures for off-duty adventures.',
                'image' => 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80',
            ],
        ];

        $trends = [
            [
                'title' => 'Sculpted Tailoring',
                'summary' => 'Architectural blazers and tapered trousers deliver power dressing with ease.',
            ],
            [
                'title' => 'Chromatic Layers',
                'summary' => 'Unexpected colour stories grounded in neutral palettes for multi-season styling.',
            ],
            [
                'title' => 'Sustainable Luxe',
                'summary' => 'Organic fibres, recycled satins, and plant-dyed wools that feel as good as they look.',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Elena Martins',
                'role' => 'Creative Director, Atelier Nueve',
                'quote' => 'Mistores curates pieces that feel bespoke. Every delivery arrives ready for the spotlight.',
            ],
            [
                'name' => 'Jordan Avery',
                'role' => 'Fashion Editor, ICON Magazine',
                'quote' => 'This is the collection stylists keep whispering about backstage — modern, sharp, unforgettable.',
            ],
            [
                'name' => 'Sera Kwon',
                'role' => 'Founder, The Collective',
                'quote' => 'The fabrics, the drape, the palette — everything aligns with our clients’ elevated wardrobes.',
            ],
        ];

        $journal = [
            [
                'title' => 'How to Build a Capsule Wardrobe',
                'category' => 'Guides',
                'reading_time' => '6 min read',
                'excerpt' => 'Refine your closet with purposeful layers that transition from morning studio sessions to midnight events.',
            ],
            [
                'title' => 'Behind the Scenes: AW24 Lookbook',
                'category' => 'Studio',
                'reading_time' => '4 min read',
                'excerpt' => 'Step inside our warehouse as we capture sculptural silhouettes against soft industrial light.',
            ],
            [
                'title' => 'Designer Spotlight: Mila Ortega',
                'category' => 'Interviews',
                'reading_time' => '8 min read',
                'excerpt' => 'The visionary behind our best-selling wrap dress talks craft, community, and mindful production.',
            ],
        ];

        return view('livewire.fashion-home', [
            'collections' => $collections,
            'trends' => $trends,
            'testimonials' => $testimonials,
            'journal' => $journal,
        ])->layout('layouts.guest', [
            'title' => 'Mistores — Contemporary Fashion for Every Moment',
        ]);
    }
}
