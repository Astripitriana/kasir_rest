<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $visible = ['nm_mnu', 'gambar_masakan', 'kategori', 'harga', 'status'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nm_mnu', 'gambar_masakan', 'kategori', 'harga', 'status'];

    public $timestamp = true;
    // membuat relasi one to many
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'menu_id');
    }
    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'menu_id');
    }
    public function image()
    {
        if ($this->gambar_masakan && file_exists(public_path('image/menu/' . $this->gambar_masakan))) {
            return asset('image/menu/' . $this->gambar_masakan);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar_masakan && file_exists(public_path('image/menu/' . $this->gambar_masakan))) {
            return unlink(public_path('image/menu/' . $this->gambar_masakan));
        }
    }
}
