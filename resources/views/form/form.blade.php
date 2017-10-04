@extends('main')
@section('content')
            <form id="form" action="register" method="post">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                 <label for="nombre">Nombre</label>
                 <input type="text" name="nombre" required>
                </div>
                <div class="form-group">
                 <label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="email" name="email" required>
                </div>
                 <div class="form-group">
                 <label for="date">Date</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="date" name="bday">
                </div>
                 
                <input type="button" value="Agregar Domicilio" onclick="myFunction()" class="btn btn-success">
                 <div class="form-group" id="guardar">
                     <input type="submit" value="Guardar"  class="btn btn-primary">
                 </div>
                
            </form>
@stop
     

