<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_anggota','kode_buku','tgl_pinjam','tgl_dikembalikan','tgl_kembali','denda'];
}
