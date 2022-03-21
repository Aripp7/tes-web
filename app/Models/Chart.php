<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
    protected $table = "tb_chart";
    protected $primaryKey = "id_chart";
    protected $filltable = [
        'id_chart', 'nama_barang', 'jumlah', 'total_harga'
    ];
}
