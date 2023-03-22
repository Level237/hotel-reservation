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
            'email'=>'OnomoHotel123@gmail.com',
            'password'=>bcrypt('Onomo34@H'),
            'nombres_etoiles'=>4,
            'ville'=>"douala",
            "tel"=>"678390037"
        ],
    );

    Hotel::create([
        'id'=>2,
        'nom_hotel'=>"Akwa palace",
        'email'=>'AkwaPalace45@gmail.com',
        'password'=>bcrypt('Akwa637palace'),
        'nombres_etoiles'=>4,
        'ville'=>"douala",
        "tel"=>"667463552"
    ],
);

Hotel::create([
    'id'=>3,
    'nom_hotel'=>"Ibis hotel",
    'email'=>'HotelIbis@gmail.com',
    'password'=>bcrypt('IbisHotel45@2Z'),
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    "tel"=>"678039436"
],
);

Hotel::create([
    'id'=>4,
    'nom_hotel'=>"Hotel la falaise",
    'email'=>'FalaiseHotel34@gmail.com',
    'password'=>bcrypt('HotelFalaise647@'),
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    "tel"=>"678039436"
],
);

Hotel::create([
    'id'=>5,
    'nom_hotel'=>"Hotel sawa",
    'email'=>'HotelSawa67@gmail.com',
    'password'=>bcrypt('SawaHotel23@'),
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    "tel"=>"678466374"
],
);

Hotel::create([
    'id'=>6,
    'nom_hotel'=>"Star land",
    'email'=>'StarLand45@gmail.com',
    'password'=>bcrypt('StarLand637@jd'),
    'nombres_etoiles'=>5,
    'ville'=>"douala",
    "tel"=>"678637734"
],
);

Hotel::create([
    'id'=>7,
    'nom_hotel'=>"Residence la falaisse",
    'email'=>'ResidenceFalaise64@gmail.com',
    'password'=>bcrypt('Falaise64735@'),
    'nombres_etoiles'=>3,
    'ville'=>"douala",
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>8,
    'nom_hotel'=>"Vallee des princes",
    'email'=>'Vallee45@gmail.com',
    'password'=>bcrypt('vallpri453@d'),
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>9,
    'nom_hotel'=>"Noubou internationnal",
    'email'=>'Noubou34@gmail.com',
    'password'=>bcrypt('noubou345@'),
    'nombres_etoiles'=>4,
    'ville'=>"douala",
    "tel"=>"689473552"
],
);

Hotel::create([
    'id'=>10,
    'nom_hotel'=>"La falaise de yaounde",
    'email'=>'YdeFalaise67@gmail.com',
    'password'=>bcrypt('FalYde367'),
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    "tel"=>"6902373763"
],
);

Hotel::create([
    'id'=>11,
    'nom_hotel'=>"Safyad hotel",
    'email'=>'hotelSafyad@gmail.com',
    'password'=>bcrypt('safyad@23'),
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    "tel"=>"692374893"
],
);

Hotel::create([
    'id'=>12,
    'nom_hotel'=>"Hotel Franco",
    'email'=>'FrancoHotel23@gmail.com',
    'password'=>bcrypt('francoHotel56'),
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>13,
    'nom_hotel'=>"Hilton Hotel",
    'email'=>'HiltonHotelYde34@gmail.com',
    'password'=>bcrypt('hilton45@fhgh'),
    'nombres_etoiles'=>5,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>14,
    'nom_hotel'=>"Boun's hotel",
    'email'=>'BounsHotel@gmail.com',
    'password'=>bcrypt('dueobound@djjh'),
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>15,
    'nom_hotel'=>"Massao palace hotel",
    'email'=>'MassaoPalace@gmail.com',
    'password'=>bcrypt('MassaoHJ@palace'),
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>16,
    'nom_hotel'=>"Hotel le fibi",
    'email'=>'FibiHotel@gmail.com',
    'password'=>bcrypt('fibiHotel452#'),
    'nombres_etoiles'=>4,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>17,
    'nom_hotel'=>"Hotel la couronne RW",
    'email'=>'CouroneHotel78@gmail.com',
    'password'=>bcrypt('Courone723@'),
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>18,
    'nom_hotel'=>"Yaahot",
    'email'=>'Yaahot78@gmail.com',
    'password'=>bcrypt('yaahot#éjd'),
    'nombres_etoiles'=>3,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);

Hotel::create([
    'id'=>19,
    'nom_hotel'=>"Djeuga palace hotel",
    'email'=>'Djeuga67@gmail.com',
    'password'=>bcrypt('Djeuga23@'),
    'nombres_etoiles'=>2,
    'ville'=>"Yaoundé",
    "tel"=>"695636738"
],
);
    }
}
