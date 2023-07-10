<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $fillabel = ['kode', 'nama', 'bobot'];
    
    public function laporan(){
        return $this->hasMany(laporan::class, 'kriteria_id', 'kode');
    }
}
