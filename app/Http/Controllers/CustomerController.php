<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return 'Hellow world -r';
        $q = Customer::all();
        // dd($q);
        return view('customer.index', compact('q'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nama = $request->name;
        $alamat1 = $request->address1;
        $alamat2 = $request->address2;
        $alamat3 = $request->address3;

        $customer = new Customer();
        $customer->name = $nama;
        $customer->address1 = $alamat1;
        $customer->address2 = $alamat2;
        $customer->address3 = $alamat3;

        $customer->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd(request()->all(), $id);

        $customer = Customer::findOrFail(10);
        $customer->delete();

        return redirect()->back();
    }
}
