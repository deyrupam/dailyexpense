<?php

namespace App\Http\Controllers;
use App\Http\Resources\Expense\ExpenseResource;
use App\Expense;
use App\User;
use Illuminate\Http\Request;
use auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index()
    {



        //  $data=Expense::paginate(10);

         $data = Expense::with('user')->latest()->paginate(5);
        // return $data;

        //dd($data);

       return view('expense.index', compact('data'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=Auth::id();

        return view('expense.create',['id'=>$id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $request->validate([
            'bill'=>'required',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/'

        ]);
        $bill = new Expense;
        $bill->bill = $request->bill;
        $bill->price = $request->price;
        $bill->note = $request->note;
        $bill->user_id = $request->user_id;

        $bill->save();


        return redirect('bill/create')->with('success', 'bill generated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'bill'=>'required',
            'price'=>'required',

        ]);
        $bill = Expense::find($id);
        $bill->bill=$request->get('bill');
        $bill->price=$request->get('price');
        $bill->note=$request->get('note');
        $bill->save();
        return redirect('/bill')->with('success', 'bill updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense,$id)
    {
        $bill = Expense::find($id);
        $bill->delete();
        return redirect('/bill')->with('success', 'Bill deleted!');
    }

    public function edit($id)
    {
        $bill = Expense::find($id);
        return view('expense.edit', compact('bill'));
    }
    public function show($id)
    {

        $bill = Expense::find($id);
        return view('expense.show', compact('bill'));
    }
    public function checkage()
    {

        //

    }
}
