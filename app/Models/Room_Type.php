<?php

namespace App\Models;

use App\Models\Chambre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room_Type extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'price',
        'adult_capacity',
        'kids_capacity',
    ];

    public function chambres():HasMany{
        return $this->hasMany(Chambre::class);
    }

}
