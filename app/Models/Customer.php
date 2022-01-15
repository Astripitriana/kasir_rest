<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $visible = ['order_id', 'nama', 'no_meja'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['order_id', 'nama', 'no_meja'];

    public $timestamp = true;
    //membuat relasi one to many

    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'customer_id');
    }
}
