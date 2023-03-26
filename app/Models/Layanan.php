<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "deskripsi", "status"];

    public function foto() {
        return $this->hasMany(FotoLayanan::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($layanan) {
            $foto = $layanan->foto()->get();

            foreach ($foto as $key => $value) {
                if(Storage::exists('public/'.$value->foto)){
                    Storage::delete('public/'.$value->foto);
                }
            }

            $layanan->foto()->delete();
        });
    }
}
