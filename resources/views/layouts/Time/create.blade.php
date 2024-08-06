@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<form method="post" action={{route('times.store')}}>
@csrf
  <div class=" text-center">

      <select name="ds" class="form-select">
      <option selected>doctor_name</option>
       @foreach($doctors as $doctor)
             <option value={{$doctor['id']}}>{{$doctor['name']}}</option>
       @endforeach      
       </select>
       <br>
    @error('ds')
    <span class="fs-6 text-danger text-center">{{$message}}</span>
    @enderror
  </div>
  <br>
  <div class=" text-center">
    <select name="nameP">
     <option value={{$patientt}}>{{$pa}}</option>
    </select>
    <br>
    @error('nameP')
         <span class="fs-6 text-danger text-center">{{$message}}</span>
    @enderror
     </div>
  <br>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="date">
         @error('date')
    <span class="fs-6 text-danger text-center">{{$message}}</span>
    @enderror
    </div>
  </div>
   
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">hour</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name='hour'>
    @error('hour')
    <span class="fs-6 text-danger text-center">{{$message}}</span>
    @enderror
    </div>
  </div>
  

<div class="text-center">
  <button type="submit" class="btn btn-primary">create</button>
</div>

</form>
@stop