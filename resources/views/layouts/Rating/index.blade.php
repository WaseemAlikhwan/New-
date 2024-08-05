@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<h1>Rating</h1>

{{-- <form method="GET" action="{{ route('doctor.search') }}" >
  @csrf
  <div class='input-group'>
   <input type="text" class='form-control' name="query" placeholder="search" value="{{request('query')}}">
      <button class='bit bit-outline-secondary' type='submit'>search</button>
  </div> 
</form> --}}

<table class='table'>
  <thead>
    <td>competency</td>
    <td>name</td>
    <td>Rate</td>
  </thead>
<tbody>
  @foreach($doctors as $doctor)
  <tr>
    <td> <h3>{{$doctor->competency['name']}}</h3></td>
  <td><h3>{{$doctor->name}}</h3></td>

 <td> <a class='btn btn-success' href="{{route('rating.avg',['id'=>$doctor->id])}}">avg rate</a></td>
  </tr>
  @endforeach
</tbody>
</table>

<div class='text-conter'>
  <a class='btn btn-success' href="{{ route('rating.add') }}">add reting</a>
</div>

 
@stop
