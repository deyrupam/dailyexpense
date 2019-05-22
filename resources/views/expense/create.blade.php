@extends('layouts.exp')
@section('content')

<!-- Jumbotron -->
<div class="jumbotron">
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="list-group">
  <a href="#" class="list-group-item active">
  Generate Bill
  </a>
</div>
<form method="post" action="{{url('/create/bill')}}">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Bill</label>
      <input type="text" class="form-control" name="bill" id="bill" placeholder="Bill name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">price</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="Price">
    </div>
  </div>
  <div class="form-group col-md-6">
  <div class="form-group">
    <input type="text" class="form-control" id="note" name="note" placeholder="Description (optional)">
  </div>

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
