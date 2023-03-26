<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Ambulan extends Model
{

    use HasFactory;

    protected $fillable = ["nama", "tahun", "jumlah", "merk", "deskripsi", "status"];

    public function foto() {
        return $this->hasMany(FotoAmbulan::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($ambulan) {
            $foto = $ambulan->foto()->get();

            foreach ($foto as $key => $value) {
                if(Storage::exists('public/'.$value->foto)){
                    Storage::delete('public/'.$value->foto);
                }
            }

            $ambulan->foto()->delete();
        });
    }

}
