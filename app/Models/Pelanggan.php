<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_lengkap',
        'alamat',
        'umur',
        'jenis_kelamin',
    ];

    public function keluhans(): HasMany
    {
        return $this->hasMany(Keluhan::class);
    }
}
