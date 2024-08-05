@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<h1>Doctors</h1>
<body>
 <form  method="post" action="{{ route('doctor.store') }}"> 
    @csrf
  name :  <input type="text" name='name'>
  Competency ID
   <select name="competency_id">
    @foreach($competencies as $competency)
        <option value="{{ $competency->id }}"> 
            {{ $competency->name }}
        </option>
    @endforeach
</select><br /><br />
   <input type="submit" name='submit' value="ok">  

 </form> 
</body>
@stop