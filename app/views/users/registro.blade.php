@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Registro</h1>

            {{ Form::open(['route' => 'registrar', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

            {{ Field::text('nombre_completo') }}
            {{ Field::email('email') }}
            {{ Field::password('password') }}
            {{ Field::password('password_confirmation', ['placeholder' => 'Repite la Contraseña']) }}

            <p>
                <input type="submit" value="Registrar" class="btn btn-success"/>
            </p>

            {{ Form::close() }}

        </div>
    </div>

</div>

@stop