<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'name'=>"Admin",
            'email'=>"admin@hotel.com",
            'role_id'=>1,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>2,
            'name'=>"ondoua",
            'email'=>"OnomoHotel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('onomo@4'),
        ],
        );

        User::create([
            'id'=>3,
            'name'=>"nicolas",
            'email'=>"PalaceAkwa32@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>4,
            'name'=>"Louisa",
            'email'=>"HotelIbis@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>5,
            'name'=>"Falaise",
            'email'=>"LaFalaiseHotel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>6,
            'name'=>"Anguissa Kevin",
            'email'=>"SawaHotel35@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>7,
            'name'=>"Lewis Augustin",
            'email'=>"StarLand89@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>8,
            'name'=>"Marcel Awoudou",
            'email'=>"ResidenceFalaise@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );


        User::create([
            'id'=>9,
            'name'=>"Djemba Gaetan",
            'email'=>"ValleePrince@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>10,
            'name'=>"Noubou etoille",
            'email'=>"NoubouHotel90@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>11,
            'name'=>"Lilian Mvondo",
            'email'=>"FalaiseYde78@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>12,
            'name'=>"Tatchuim christian",
            'email'=>"SafyadHotel46@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>13,
            'name'=>"louis michel",
            'email'=>"FrancoHotel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>14,
            'name'=>"Mbida roland",
            'email'=>"HiltonHotel38@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>15,
            'name'=>"Massao edouard",
            'email'=>"BounsHotel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>16,
            'name'=>"Massao Gerard",
            'email'=>"MassaoHotel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>17,
            'name'=>"Eleanor merveille",
            'email'=>"FibiPalace23@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>18,
            'name'=>"Marcel ekanga",
            'email'=>"PalaceCouronne56@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>19,
            'name'=>"ntoumba esaie",
            'email'=>"YahottHostel@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>20,
            'name'=>"elisa promesse",
            'email'=>"DjeugaPalace78@gmail.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
        ],
        );

        User::create([
            'id'=>21,
            'name'=>"martin",
            'email'=>"Bramslevel129@gmail.com",
            'role_id'=>3,
            'password'=>bcrypt('levelvertos'),
        ],
        );
    }
}
