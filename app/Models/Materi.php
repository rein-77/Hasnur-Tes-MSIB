<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    public function kursus() {
        return $this->belongsTo(Kursus::class);
    }

    protected $table ='materi';

    protected $fillable = ['judul', 'deskripsi', 'link_embed', 'kursus_id'];
}
