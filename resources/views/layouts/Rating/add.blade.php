@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<h1> add Rating</h1>
<body>
 <form  method="post" action="{{route('rating.store')}}"> 
    @csrf
    Doctor name:
    <select name="doctor_name">
     @foreach($doctors as $doctor)
         <option value="{{ $doctor->id }}"> 
             {{ $doctor->name }}
         </option>
     @endforeach
 </select><br /><br />
 patient name:
    <select name="patient_name">
     @foreach($patients as $patient)
         <option value="{{ $patient->id }}"> 
             {{ $patient->name }}
         </option>
     @endforeach  
 </select><br /><br />
 Rating :
 <select name="rating">
   
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    
</select><br /><br />

  <input type="submit" value="Add" name='add'>
 </form> 
</body>
@stop