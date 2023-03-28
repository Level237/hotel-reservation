<?php

namespace App\Models;

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable=[
        'chambre_id',
        'check_in',
        'check_out',
        'duration_of_stay',
        'user_id',
        'price_reser',
        'status'
    ];

    public function user():BelongsTo{
        return $this->belongs(User::class);
    }

    public function chambre():BelongsTo{
        return $this->belongs(Chambre::class);
    }
}
