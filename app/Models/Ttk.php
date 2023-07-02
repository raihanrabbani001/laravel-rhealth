<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ttk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'no_registrasi',
    ];

    public function keluhans(): HasMany
    {
        return $this->hasMany(Keluhan::class);
    }
}
