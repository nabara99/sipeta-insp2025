<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_sub',
        'kode_sub',
        'kegiatan_id',
        'pptk_id',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
        return $this->belongsTo(Program::class);
    }

    public function pptk()
    {
        return $this->belongsTo(Pptk::class);
    }
}
