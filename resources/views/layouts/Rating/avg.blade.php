@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<h1>Rating</h1>
<table class='table'>
  <thead>
    
    <td>Rate</td>
  </thead>
<tbody>
  <tr>
   

    @if ($sum)
    <td>{{$sum}}👏</td>
    @else
    <td>🤷‍♂️🤷‍♀️لا يوجد تقييم </td> 
    @endif
  </tr>
</tbody>
</table>
<div class='text-conter'>
  <a class='btn btn-success' href="{{route('rating')}}">return</a>
</div>
 
</body>
@stop