<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Session;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kasir = Kasir::all();
        return view('admin.kasir.index', compact('kasir'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasir = Kasir::all();
        return view('admin.kasir.create', compact('kasir'));

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
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',

        ]);

        $kasir = new Kasir;
//DB            CREATE
        $kasir->nama = $request->nama;
        $kasir->jk = $request->jk;
        $kasir->alamat = $request->alamat;
        $kasir->no_hp = $request->no_hp;

        $kasir->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('kasir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('admin.kasir.show', compact('kasir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $kasir = Kasir::findOrFail($id);
        return view('admin.kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',

        ]);

        $kasir = Kasir::findOrFail($id);
        $kasir->nama = $request->nama;
        $kasir->jk = $request->jk;
        $kasir->alamat = $request->alamat;
        $kasir->no_hp = $request->no_hp;

        $kasir->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);

        return redirect()->route('kasir.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasir  $kasir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);

        return redirect()->route('kasir.index');

    }
}
