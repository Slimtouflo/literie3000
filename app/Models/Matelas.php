<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matelas extends Model
{
    use HasFactory;

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
}
