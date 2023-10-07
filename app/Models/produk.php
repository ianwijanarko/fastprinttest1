<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_produk';

    protected $fillable = ['nama_produk','harga','kategori_id_kategori','status_id_status'];
}
