<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriesM extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillabe=['nama'];

    public function barang() {
        return $this->hasMany(productM::class);
    }

}
