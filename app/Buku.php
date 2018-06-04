<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['kode_buku','judul_buku','pengarang','tahun_terbit','id_kategori','id_lokasi','stok'];
}
