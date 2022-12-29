<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productM extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','stok','jumlah_terjual','tanggal_transaksi','categories_id'];
    public function categories (){
        return $this->belongsTo(categoriesM::class);
    }
}
