<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Menu',
            'data' => $menu,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->nm_mnu = $request->nm_mnu;
        $menu->gambar_masakan = $request->gambar_masakan;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->status = $request->status;
        $menu->save();
        return response()->json([
            'success' => true,
            'message' => 'Data menu berhasil di buat',
            'data' => $menu,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => ' Show Data menu berhasil di buat',
            'data' => $menu,

        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->nm_mnu = $request->nm_mnu;
        $menu->gambar_masakan = $request->gambar_masakan;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->status = $requset->status;
        $menu->save();
        return response()->json([
            'success' => true,
            'message' => '  Data menu berhasil di edit',
            'data' => $menu,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return response()->json([
            'success' => true,
            'message' => ' Show Data menu berhasil diHapus',
            'data' => $menu,
        ], 201);
    }
}
