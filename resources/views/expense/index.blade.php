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
    diary Book
  </a>
  <table class="table table-striped table-dark">
  <thead>
    <tr>

      <th scope="col">Bill</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Who</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="expenselist">

    @foreach($data as $row)

    <tr>
      <td>{{$row->bill}}</td>
      <td>{{$row->price}}</td>
      <td>{{$row->created_at}}</td>


      <td><span><a href="{{action('ExpenseController@edit',$row->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></span></td>
      <td><span><a href="{{action('ExpenseController@show',$row->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></span></td>
      <td>
                <form action="{{action('ExpenseController@destroy', $row->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                </form>
            </td>
            <td><span>{{$row->user->name}}</span></td>

  </tr>
    @endforeach
 </tbody>
</table>


</ul>


</div>

@endsection
