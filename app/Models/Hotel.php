<?php

namespace App\Models;

use App\Models\User;
use App\Models\Chambre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom_hotel',
        'nombres_etoiles',
        'ville',
        'user_id',
        'image',
        'tel'
    ];

    public function user():BelongsTo{
        return $this->belongs(User::class);
    }

    public function chambres():HasMany{
        return $this->hasMany(Chambre::class);
    }
}
