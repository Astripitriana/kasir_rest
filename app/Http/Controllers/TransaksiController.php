<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Session;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::all();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::all();
        $menu = Menu::all();

        $customer = Customer::all();
        $transaksi = transaksi::all();
        return view('admin.transaksi.create', compact('transaksi', 'order', 'customer', 'menu'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required',
            'customer_id' => 'required',
            'menu_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'uang' => 'required',
            // 'total' => 'required',
            // 'kembalian' => 'required',
            'status' => 'required',
            'tanggal' => 'required',

        ]);

        $transaksi = new transaksi;
//DB            CREATE
        $transaksi->order_id = $request->order_id;
        $transaksi->customer_id = $request->customer_id;
        $transaksi->menu_id = $request->menu_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->harga = $request->harga;
        $transaksi->uang = $request->uang;
        $transaksi->total = $transaksi->harga * $transaksi->jumlah;

        $transaksi->kembalian = $transaksi->uang - $transaksi->total;
        $transaksi->status = $request->status;
        $transaksi->tanggal = $request->tanggal;

        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::all();
        $menu = menu::all();

        $customer = Customer::all();
        $transaksi = transaksi::findOrFail($id);
        return view('admin.transaksi.edit', compact('transaksi', 'order', 'customer', 'menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'order_id' => 'required',
            'customer_id' => 'required',
            'menu_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'uang' => 'required',
            'total' => 'required',
            'kembalian' => 'required',
            'status' => 'required',
            'tanggal' => 'required',

        ]);

        $transaksi = transaksi::findOrFail($id);
        $transaksi->order_id = $request->order_id;
        $transaksi->customer_id = $request->customer_id;
        $transaksi->menu_id = $request->menu_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->harga = $request->harga;
        $transaksi->uang = $request->uang;

        $transaksi->total = $transaksi->harga * $transaksi->jumlah;
        $transaksi->kembalian = $request->kembalian;
        $transaksi->status = $request->status;
        $transaksi->tanggal = $request->tanggal;

        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);

        return redirect()->route('transaksi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        ession::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);

        return redirect()->route('transaksi.index');

    }
}
