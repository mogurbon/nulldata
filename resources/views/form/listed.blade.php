@extends('main')
@section('content')
<table class="table">
     <thead>
      <tr>
        <th>Nombre</th>
        
        <th>Email</th>
        <th>Cumpleaños</th>
      </tr>
    </thead>
     <tbody>
    @foreach ($datos as $dato)
        <tr>
            <td>
                <a href="detail/{{$dato->id}}"> {{ $dato->name }}</a>
            </td>
             <td>
                {{ $dato->email }}
            </td>
            <td>
                {{ $dato->birthday }}
            </td>
        </tr>
    @endforeach
     </tbody>
</table>      


     

