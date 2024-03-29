<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerTransaction;
use Illuminate\Http\Request;

class CustomerTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $q = CustomerTransaction::with('custName')->get();
        $q2 = Customer::all();
        return view('customer.form', compact('q', 'q2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $invoice = $request->invoice;
        $cust_id = $request->id;

        $transaction = new CustomerTransaction();
        $transaction->invoice = $invoice;
        $transaction->customer_id = $cust_id;
        $transaction->save();

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
        $transaction = CustomerTransaction::findOrFail($id);
        $customer = Customer::all();
        return view('customer.transactionUpdate', compact('transaction', 'customer', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $invoice = $request->invoice;
        $cust_id = $request->id;

        // dd(request()->all());

        $transaction = CustomerTransaction::findOrFail($id);
        $transaction->invoice = $invoice;
        $transaction->customer_id = $cust_id;
        $transaction->save();

        return redirect()->route('transaction.form')->with('status', 'Saved Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $transaction = CustomerTransaction::findOrFail($id);
        $transaction->delete();

        return redirect()->back();
    }
}
