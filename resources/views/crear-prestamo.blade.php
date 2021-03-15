@extends('layout')
@section('primero')


    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif
<x-errors/>
<form method="POST" action="/">
    {{csrf_field()}}

    <div class="mb-3">
        <label for="id_prestamo" class="form-label">ID Alfanumerico</label>
        <input type="text" class="form-control" name="id_prestamo" value="{{old("id_prestamo")}}"  id="id_prestamo" required>
        @if($errors->first('id_prestamo'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('id_prestamo')}}
        </div>
        @endif
        <div id="id_prestamohelp" class="form-text">acá debera poner un id alfanumerico A1-B1-C1 etc</div>
    </div>

    <div>
        <label for="casado" class="form-label">¿Es casado?</label>
        <select class="form-select" aria-label="Default select example" name="casado" id="casado" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
            {{$errors->first('casado')}}
        </select>
    </div>

    <div>
        <label for="independiente" class="form-label">¿Es independiente?</label>
        <select class="form-select" aria-label="Default select example" name="independiente" id="independiente" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
            {{$errors->first('independiente')}}
        </select>
    </div>


    <div>
        <label for="dependientes" class="form-label">¿Cuantas personas estan a cargo suyo?</label>
        <select class="form-select" aria-label="Default select example" name="dependientes" id="dependientes" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="+3">+3</option>
            {{$errors->first('dependientes')}}
        </select>
    </div>


    <div class="mb-3">
        <label for="educacion" class="form-label">¿Nivel de educacion de la persona(Graduado, No graduado)?</label>
        <select class="form-select" aria-label="Default select example" name="educacion" id="educacion" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="Graduado">Graduado</option>
            <option value="No graduado">No graduado</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="i_d" class="form-label">¿ingreso del aplicante?</label>
        <input type="number" step="0.01" class="form-control" name="i_d" value="{{old("i_d")}}"id="i_d" required>
        @if($errors->first('i_d'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('i_d')}}
            </div>
        @endif
        <div id="i_dhelp" class="form-text">coloque sus ingresos</div>
    </div>

    <div class="mb-3">
        <label for="i_c" class="form-label">¿ingreso del codeudor?</label>
        <input type="number" step="0.01" class="form-control" name="i_c" value="{{old("i_c")}}" id="i_c" required>
        @if($errors->first('i_c'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('i_c')}}
        </div>
        @endif
        <div id="i_cHelp" class="form-text">coloque los ingresos</div>
    </div>
    <div class="mb-3">
        <label for="c_p" class="form-label">¿cantidad de credito solicitada?</label>
        <input type="number" step="0.01" class="form-control" name="c_p" value="{{old("c_p")}}" id="c_p" required>
        @if($errors->first('c_p'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('c_p')}}
        </div>
        @endif

    </div>
    <div class="mb-3">
        <label for="p_p" class="form-label">¿plazo del credito?</label>
        <input type="number" class="form-control"name="p_p" value="{{old("p_p")}}" id="p_p" required>
        @if($errors->first('p_p'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('p_p')}}
        </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="historia_credito" class="form-label">¿aplicante cuenta con historia crediticia favorable(1=SI/0=NO)?</label>
        <select class="form-select" aria-label="Default select example" name="historia_credito" id="historia_credito" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tipo_propiedad" class="form-label">¿Tipo de propiedad?</label>
        <select class="form-select" aria-label="Default select example" name="tipo_propiedad" id="tipo_propiedad" required>
            <option selected="true" disabled="disabled" value="">Escoja una opcion...</option>
            <option value="Urbana">Urbana</option>
            <option value="Rural">Rural</option>
            <option value="Semi Urbana">Semi Urbana</option>
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</form>
@endsection