<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InformasiObat extends Model
{
    use HasFactory;

    protected $fillable = [
        'keluhan_id',
        'obat_id',
        'dosis_penggunaan',
    ];

    public function keluhan(): BelongsTo
    {
        return $this->belongsTo(Keluhan::class);
    }

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class);
    }
}
