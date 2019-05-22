<?php

namespace App\Http\Controllers;

use App\Expense;
use App\User;
use Illuminate\Http\Request;
use auth;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Expense::with('user')->latest()->get();
        // return $data;

        //dd($data);

       return view('expense.transaction', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Transsaction  $transsaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transsaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Transsaction  $transsaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transsaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Transsaction  $transsaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transsaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Transsaction  $transsaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transsaction $transaction)
    {
        //
    }
}
