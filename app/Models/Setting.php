<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "jargon", "alamat", "deskripsi", "no_hp", "no_hp_alt", "email", "youtube", "instagram", "tiktok", "whatsapp"];

}
