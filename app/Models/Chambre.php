<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Room_Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'status',
        'hotel_id',
        'room__type_id',
    ];

    public function hotel():BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function roomType():BelongsTo
    {
        return $this->belongsTo(Room_Type::class);
    }
}
