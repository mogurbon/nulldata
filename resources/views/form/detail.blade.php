@extends('main')
@section('content')
            <form id="form" >
                 
                <div class="form-group">
                 <label for="nombre">Nombre</label>
                 <input type="text" name="nombre" disabled value="{{$employee->name}}">
                </div>
                <div class="form-group">
                 <label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="email" name="email" disabled value="{{$employee->email}}">
                </div>
                 <div class="form-group">
                 <label for="date">Date</label>nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="date" name="bday" value="{{$employee->birthday}}">
                </div>
                
                 
                 
                  @foreach ($address as $add)
                  <div><textarea >{{$add->address}}</textarea></div>
                  
                  @endforeach
                
                 <div class="form-group" id="guardar">
                     <input type="button" value="Regresar" onclick="window.location.href='/'"  class="btn btn-primary">
                 </div>
                
            </form>
@stop
