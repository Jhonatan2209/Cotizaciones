@extends('layouts')
@section('title', 'Cotizar en línea')
@section('content')

    <div class="containerone">
        <h1>
            Cotizar en línea
        </h1>
        <div class="centrar">
            <div class="large columns">
                <p class="text-center">
                    Envíanos tus datos y te enviaremos una cotización <b>automáticamente</b>.
                </p>
                <p class="text-center lead">ACTIVACIÓN AUTOMÁTICA (en minutos).</p>
            </div>
            <form action="{{ route('cotizarv') }}" class="form-control" method="POST">
                @csrf
                <label class="" for="ruc">RUC(que exista en Sunat)</label>
                <input type="text" name="ruc" id="ruc" placeholder="RUC" class="form-control"
                    value="{{ old('ruc') }}">
                {!! $errors->first('ruc', '<small>:message</small><br>') !!}
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">ACEPTAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection
