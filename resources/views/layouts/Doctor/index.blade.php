@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Doctors</h1>
    <table class='table'>
      <thead>
        
        <td>name</td>
        <td>competency</td>
      </thead>
    <tbody>

       
      
      @foreach($doctors as $doctors)
      <tr>
       
      <td><h3>{{$doctors->name}}</h3></td>
    <td><h3>{{$doctors->competency['name']}}</h3></td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <div class='text-conter'>
      <a  class='btn btn-success' href="{{route('doctor.add')}}">add Doctor</a>
    </div>
     

@stop
