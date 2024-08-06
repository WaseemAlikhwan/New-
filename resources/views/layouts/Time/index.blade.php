@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Times</h1>
    <table class="table">
        <thead>
              <td>doctor_name</td>
              <td>user_name</td>
              <td>date</td>
              <td>hour</td>             
         </thead>
         <tbody>   
        @foreach($times as $time)
        <tr>
        
            <td>{{$time->doctor['name']}}</td> 
             <td>{{$time->user['name']}}</td> 
             <td>{{$time->date}}</td> 
              <td>{{$time->hour}}</td>
       </tr> 
         @endforeach
        </tbody>
      </table>
      <div class="text-center">
  <a class="btn btn-success" href='/home/times/create/{patient}'>create</a>
      </div>
@stop




