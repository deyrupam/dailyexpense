@extends('layouts.exp')

@section('content')

<!-- Jumbotron -->
<div class="jumbotron">

@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
@endif
<div class="list-group">
  <a href="#" class="list-group-item active">
   Transaction
  </a>
  <h3>Name:{{ Auth::user()->name}} </h3>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Bill</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
  <tbody class="expenselist">
  <?php $key =0; $totalPrice=0; ?>
  @foreach($data as $row)

  @if(\Auth::user()->id == $row->user->id)
  <?php $totalPrice=$totalPrice+$row->price; ?>
  <tr>
  <td>{{ ++$key }}</td>
  <td>{{$row->bill}}</td>
  <td>{{$row->price}}</td>
  <td>{{$row->created_at}}</td>
  </tr>

  @endif
  @endforeach
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Total:{{$totalPrice}}</th>
      <th scope="col"></th>

    </tr>
  </thead>
  </tbody>
</table>
</div>

@endsection
