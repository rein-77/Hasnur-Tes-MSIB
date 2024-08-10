<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    public function materi() {
        return $this->hasMany(Materi::class);
    }

    protected $table ='kursus';

    protected $fillable = ['nama', 'deskripsi', 'durasi'];
}
