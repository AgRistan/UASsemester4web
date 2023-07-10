<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillabel = ['nama', 'C1', 'C2', 'C3', 'C4', 'kriteria_id'];

    public function kriteria(){
        return $this->belongsTo(kriteria::class, 'kriteria_id', 'id');
    }
}
