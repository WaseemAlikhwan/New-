@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Times</h1>
    <table class="table">
        <thead>
              <td>doctor_name</td>
              <td>patient_name</td>
              <td>date</td>
              <td>hour</td>             
         </thead>
         <tbody>   
        @foreach($times as $time)
        <tr>
        
            <td>{{$time->doctor['name']}}</td> 
             <td>{{$time->patient['name']}}</td> 
             <td>{{$time->date}}</td> 
              <td>{{$time->hour}}</td>
       </tr> 
         @endforeach
        </tbody>
      </table>

@stop



{{--@extends('adminlte::page')

@section('title', 'Dashboard')























@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop
--}}

{{--
@section('css')
--}}
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
{{--
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
--}}