<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'id_bahan',
        'id_jenis',
        'nama',
        'stok',
    ];
    
    public function penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
