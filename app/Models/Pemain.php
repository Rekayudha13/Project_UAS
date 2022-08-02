<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pemain', 'umur', 'tinggi', 'berat', 'ukuran_sepatu', 'alamat', 'posisi_id', 'status_id', 'staf_id'];
}
