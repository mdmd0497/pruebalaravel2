@extends('layout')
@section('primero')

    @if(session('aprobado'))
        <div class="alert alert-success" role="alert">
            {{session('aprobado')}}
        </div>
    @endif

<div class="card" style="width: 18rem;">
    <div class="card-header">
        Resultado Operacion
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id prestamo {{$id_prestamo}}</li>
        <li class="list-group-item">Resultado:
            {{"esto es". $aprobado}}
            @if(isset($aprobado) AND $aprobado=='aprobado' )
                <div class="alert alert-success" role="alert">
                    aprobado
                </div>
            @elseif(isset($aprobado) AND $aprobado=='no aprobado')
                <div class="alert alert-danger" role="alert">
                    No aprobado
                </div>
            @endif </li>
    </ul>
</div>
    <div>
        <a href="/crear" class="btn btn-primary">Nueva consulta</a>
    </div>
@endsection