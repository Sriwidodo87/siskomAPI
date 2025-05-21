<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistribusiProduct extends Model
{
    use HasFactory;
     protected $fillable =[
        'nomer_surat','tanggal_permintaan','unit_kerja','jenis_distribusi','status_barang','alasan','tujuan','kategori_distribusi','prosedur','tanggal_mulai','tanggal_selesai','pemohon'
    ];
}
