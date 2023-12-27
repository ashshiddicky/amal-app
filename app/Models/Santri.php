<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'kelas', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'email', 'nomor_telepon'
    ];
}
