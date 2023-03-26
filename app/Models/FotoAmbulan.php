<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoAmbulan extends Model
{
    use HasFactory;

    protected $fillable = ["ambulan_id", "foto", "status"];
}
