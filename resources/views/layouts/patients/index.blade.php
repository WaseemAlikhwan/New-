@extends('adminlte::page')
@section('content_header')
    <h1>patients</h1>
    <table class="table">
        <thead>
              <td>patient name</td>
              <td>email</td>
         
         </thead>
         <tbody>   
        @foreach($patients as $patient)
        <tr>
        
            <td>{{$patient['name']}}</td> 
             <td>{{$patient['email']}}</td> 
             <td>
                <a class="btn btn-success" href= "{{route('patients.edit', $patient->id)}}">edit </a>
    
                 </td>
               <td>
                <a class="btn btn-danger" href= "{{route('patients.destroy', $patient->id)}}">delete </a>
    
                 </td>
       </tr> 
         @endforeach
         @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
        </tbody>
      </table>
      <div class="text-center">
  <a class="btn btn-success" href='{{route('patients.create')}}'>create</a>
      </div>
@stop