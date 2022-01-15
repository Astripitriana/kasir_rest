<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $visible = ['order_id', 'customer_id', 'jumlah', 'harga', 'kembalian', 'status'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['order_id', 'customer_id', 'jumlah', 'harga', 'kembalian', 'status'];

    public $timestamp = true;
    //    membuat relasi one to many
    public function orders()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
    public function customers()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function menus()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id');
    }

}
