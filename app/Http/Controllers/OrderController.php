<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();

        $order = Order::all();
        return view('admin.order.create', compact('order', 'menu'));

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
            'menu_id' => 'required',
            'customer_id' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'jumlah' => 'required',

        ]);

        $order = new Order;
//DB            CREATE
        $order->menu_id = $request->menu_id;
        $order->customer_id = $request->customer_id;
        $order->tanggal = $request->tanggal;
        $order->status = $request->status;
        $order->jumlah = $request->jumlah;

        $order->save();
        return redirect()->route('order.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::all();

        $order = Order::findOrFail($id);
        return view('admin.order.edit', compact('order', 'menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'menu_id' => 'required',
            'customer_id' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'jumlah' => 'required',

        ]);

        $order = Order::findOrFail($id);
        $order->menu_id = $request->menu_id;
        $order->customer_id = $request->customer_id;
        $order->tanggal = $request->tanggal;
        $order->status = $request->status;
        $order->jumlah = $request->jumlah;

        $order->save();
        return redirect()->route('order.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index');

    }
}
