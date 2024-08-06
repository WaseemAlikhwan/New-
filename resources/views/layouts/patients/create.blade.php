@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

<form method="post" action={{route('patients.store')}}>
@csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" name="email">
    </div>
  </div>
  
 
  
  
<div class="text-center">
  <button type="submit" class="btn btn-primary">create</button>
  
</div>
</form>
@stop