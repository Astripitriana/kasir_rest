<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('admin.customer.index', compact('customer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $customer = Customer::all();
        return view('admin.customer.create', compact('customer'));

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
            'no_meja' => 'required',

        ]);

        $customer = new Customer;
//DB            CREATE

        $customer->nama = $request->nama;
        $customer->no_meja = $request->no_meja;

        $customer->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);

        return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.show', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([

            'nama' => 'required',
            'no_meja' => 'required',

        ]);

        $customer = Customer::findOrFail($id);

        $customer->nama = $request->nama;
        $customer->no_meja = $request->no_meja;

        $customer->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);

        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);

        return redirect()->route('customer.index');

    }
}
