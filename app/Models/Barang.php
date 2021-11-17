<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $visible = ['id','kode_barang','nama_barang','jumlah',
    'harga_beli','harga_jual','kategori_id','gambar','keterangan'];

    protected $fillable = ['id','kode_barang','nama_barang','jumlah',
    'harga_beli','harga_jual','kategori_id','gambar','keterangan'];

    public $timestamps = true;

    public function author()
    {
        // Data model "Model" bisa memiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Kategori','kategori_id');
    }
    public function image()
    {
        if ($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return asset('images/books/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return unlink(public_path('images/books/' . $this->cover));
        }

    }
}
