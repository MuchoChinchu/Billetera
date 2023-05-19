<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ingreso extends Model
{
    use HasFactory;

protected $fillable=[

    "monto",
    "descripcion",
    "fecha"
];

public function ingreso () : BelongsTo
{
    return $this->belongsTo(usser::class);
}

}
