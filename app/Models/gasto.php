<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        "descripcion",
        "monto",
        "fecha",
        "establecimiento",
        "efectivo"
    ];

    public function categoria() : BelongsTo
    {
        return $this->belongsTo(categoria::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
