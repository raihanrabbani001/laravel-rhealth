<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'ttk_id',
        'keluhan',
        'diagnosa',
        'saran',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function ttk(): BelongsTo
    {
        return $this->belongsTo(Ttk::class);
    }
}
