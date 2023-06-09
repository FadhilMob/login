<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipModel extends Model
{
    use HasFactory;
    protected $table = 'arsip';
    protected $fillable = [
        'rhk_id',
        'tanggal',
        'judul_kegiatan',
    ];

    public function rhk()
    {
        return $this->belongsTo(RhkModel::class, 'rhk_id');
    }
}
