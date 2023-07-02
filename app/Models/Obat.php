<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'dosis',
        'jenis',
        'efek_samping',
    ];

    public function informasiObats(): HasMany
    {
        return $this->hasMany(InformasiObat::class);
    }
}
