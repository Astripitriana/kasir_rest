<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $visible = ['kategori', 'deskripsi'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['kategori', 'deskripsi'];

    public $timestamp = true;
}
