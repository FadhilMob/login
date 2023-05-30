<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RhkModel extends Model
{
    use HasFactory;
    protected $table = 'rhk';
    protected $fillable = [
        'nama_rhk'
    ];

    public function arsip()
    {
        return $this->HasOne(ArsipModel::class, 'rhk_id');
    }
}
