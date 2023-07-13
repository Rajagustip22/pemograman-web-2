<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';

=======
    protected $table = 'produk';
    public $timestamps = false;
    protected $primarykey = 'id';
>>>>>>> fd2ca3e (tambah file)
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];

    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class);
    }

    public function getAllData(){
        $alldata = DB::table('produk')
        ->join('kategori_produk','produk.kategori_produk_id','=','kategori_produk.id')
        ->select('produk.*','kategori_produk.nama as nama_kategori')
        ->get();
        return $alldata;
    }
}
