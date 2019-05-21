@extends('layouts.exp')
@section('content')
@include('includes.header')
<!-- Jumbotron -->
<div class="jumbotron">
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
@endif
<h2>Generate Bill</h2>
<form method="post" action="{{url('/create/bill')}}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Bill</label>
      <input type="text" class="form-control" name="transaction" id="transaction" placeholder="Bill name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">price</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="Price">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date</label>
    <input type="date" class="form-control" name="date_purchase"  id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="inputAddress2" name="note" placeholder="Description (optional)">
  </div>
  <div class="form-row">
    <div class="form-group">
    <input type="hidden" class="form-control" name="user_id" id="user_id" value={{$id}}>
    </div>
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>

</div>

@endsection
