<?php

namespace Database\Seeders;

use App\Models\Chambre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=1;$i<80;$i++){
            Chambre::create([
                'id'=>$i,
                'status'=>0,
                'hotel_id'=>rand(1,19),
                'room__type_id'=>rand(1,5),
                'image'=>"assets/images/chambres/$i.jpg",
            ],
            );
        }

    }
}
