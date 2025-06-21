<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nirm', 'email', 'pass', 'nama', 'hp', 'tempatlahir', 'tgllahir', 'alamat', 'prodi', 'tgldaftar', 'status', 'ta', 'semester'
    ];
}
