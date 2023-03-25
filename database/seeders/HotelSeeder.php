<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'id'=>1,
            'nom_hotel'=>"Onomo hotel",
            'user_id'=>2,
            'nombres_etoiles'=>4,
            'ville'=>"douala",
            'image'=>'assets/images/hotel/onomo.jpg',
            "tel"=>"678390037"
        ],
    );

    Hotel::create([
        'id'=>2,
        'nom_hotel'=>"Akwa palace",
        'user_id'=>3,
        'nombres_etoiles'=>4,
        'ville'=>"douala",
        'image'=>'assets/images/hotel/akwa-palace.jpg',
        "tel"=>"667463552"
    ],
);

Hotel::create([
    'id'=>3,
    'nom_hotel'=>"Ibis hotel",
    'user_id'=>4,
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/ibis.jpg',
    "tel"=>"678039436"
],
);

Hotel::create([
    'id'=>4,
    'nom_hotel'=>"Hotel la falaise",
    'user_id'=>5,
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/falaise-douala.jpg',
    "tel"=>"678039436"
],
);

Hotel::create([
    'id'=>5,
    'nom_hotel'=>"Hotel sawa",
    'user_id'=>6,
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/sawa.jpg',
    "tel"=>"678466374"
],
);

Hotel::create([
    'id'=>6,
    'nom_hotel'=>"Star land",
    'user_id'=>7,
    'nombres_etoiles'=>5,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/star-land.jpg',
    "tel"=>"678637734"
],
);

Hotel::create([
    'id'=>7,
    'nom_hotel'=>"Residence la falaisse",
    'user_id'=>8,
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/residence-falaise.jpg',
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>8,
    'nom_hotel'=>"Vallee des princes",
    'user_id'=>9,
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/valee.jpg',
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>9,
    'nom_hotel'=>"Noubou internationnal",
    'user_id'=>10,
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    'image'=>'assets/images/hotel/noubou.jpg',
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>10,
    'nom_hotel'=>"La falaise de yaounde",
    'user_id'=>11,
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/falaise-yaounde.jpg',
    "tel"=>"6902373763"
],
);

Hotel::create([
    'id'=>11,
    'nom_hotel'=>"Safyad hotel",
    'user_id'=>12,
    'nombres_etoiles'=>2,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/safyad.jpg',
    "tel"=>"692374893"
],
);

Hotel::create([
    'id'=>12,
    'nom_hotel'=>"Hotel Franco",
    'user_id'=>13,
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/franco.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>13,
    'nom_hotel'=>"Hilton Hotel",
    'user_id'=>14,
    'nombres_etoiles'=>5,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/hilton.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>14,
    'nom_hotel'=>"Boun's hotel",
    'user_id'=>15,
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/bouns.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>15,
    'nom_hotel'=>"Massao palace hotel",
    'user_id'=>16,
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/massao.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>16,
    'nom_hotel'=>"Hotel le fibi",
    'user_id'=>17,
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/fibi.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>17,
    'nom_hotel'=>"Hotel la couronne RW",
    'user_id'=>18,
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/couronne.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>18,
    'nom_hotel'=>"Yaahot",
    'user_id'=>19,
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/yahot.jpg',
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>19,
    'nom_hotel'=>"Djeuga palace hotel",
    'user_id'=>20,
    'nombres_etoiles'=>2,
    'ville'=>"Yaoundé",
    'image'=>'assets/images/hotel/djeuga.jpg',
    "tel"=>"695636738"
],
);
    }
}
