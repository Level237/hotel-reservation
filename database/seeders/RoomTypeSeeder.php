<?php

namespace Database\Seeders;

use App\Models\Room_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room_Type::create([
            'id'=>1,
            'title'=>'Classique',
            'adult_capacity'=>'1-3',
            'kids_capacity'=>'1-2',
            'price'=>'50000'
        ],
    );

    Room_Type::create([
        'id'=>2,
        'title'=>'Primaire',
        'adult_capacity'=>'2-6',
        'kids_capacity'=>'2-3',
        'price'=>'80000'
    ],
);

Room_Type::create([
    'id'=>3,
    'title'=>'Standart',
    'adult_capacity'=>'1-2',
    'kids_capacity'=>'0',
    'price'=>'75000'
],
);

Room_Type::create([
    'id'=>4,
    'title'=>'Simple',
    'adult_capacity'=>'1',
    'kids_capacity'=>'1',
    'price'=>'40000'
],
);

Room_Type::create([
    'id'=>5,
    'title'=>'Vip Simple',
    'adult_capacity'=>'2-3',
    'kids_capacity'=>'1-2',
    'price'=>'90000'
],
);

Room_Type::create([
    'id'=>6,
    'title'=>'Familly Group',
    'adult_capacity'=>'5-8',
    'kids_capacity'=>'1-2',
    'price'=>'50000'
],
);
Room_Type::create([
    'id'=>7,
    'title'=>'Vip Luxe',
    'adult_capacity'=>'2-3',
    'kids_capacity'=>'1-2',
    'price'=>'120000'
],
);


    }
}
