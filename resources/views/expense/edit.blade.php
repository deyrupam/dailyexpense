@extends('layouts.exp')

@section('content')
@include('includes.header')
<h2>Edit Bill</h2>
<form method="post" action="{{action('ExpenseController@update',$bill->id)}}" >
@method('PATCH')
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Bill</label>
      <input type="text" class="form-control" name="bill" id="bill" value={{$bill->bill}}>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">price</label>
      <input type="text" class="form-control" name="price" id="price" value={{$bill->price}}>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date</label>
    <input type="date" class="form-control" readonly name="created_at"  id="created_at" value={{$bill->created_at}}>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="note" name="note" value={{$bill->note}}>
  </div>

   <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection
