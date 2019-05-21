@extends('layouts.exp')

@section('content')
@include('includes.header')
<h2>View Bill</h2>
<form method="GET" action="{{action('ExpenseController@edit',$bill->id)}}" >
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Bill</label>
      <input type="text" class="form-control" name="transaction" id="transaction" readonly value={{$bill->transaction}}>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">price</label>
      <input type="text" class="form-control" name="price" id="price" readonly value={{$bill->price}}>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date</label>
    <input type="date" class="form-control" name="date_purchase" readonly id="inputAddress" value={{$bill->date_purchase}} >
  </div>
  <div class="form-group">
   <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3">{{$bill->note}}</textarea>
  </div>

   <button type="submit" class="btn btn-primary">Edit</button>

</form>

@endsection
