@extends('layouts')
@section('title', 'IngresarDatos')
@section('content')

    <div class="containertwo">
        <div class="centrar">
            <h1 class="text-center">Ingresar Datos</h1>
            <div class="large-6 large-centered column">
                <p class="lead">
                    Hemos automatizado el proceso de compra para que puedas hacerlo tu mismo. De ser necesario también
                    estamos
                    atentos
                    para ayudarte.
                </p>
            </div>
            <form action="{{ route('cotizar2post') }}" class="form" method="POST">
                @csrf
                <div id="divOne" class="form-control">
                    <h2>Empresa</h2>
                    <label for="ruc">RUC</label>
                    <input type="text" id="ruc" name="ruc" class="form-control" value="{{ old('ruc') }}">
                    {!! $errors->first('ruc', '<small>:message</small><br>') !!}
                    <label for="deno">Denominación</label>
                    <input type="text" name="deno" id="deno"class="form-control">
                </div>
                <div id="divTwo" class="form-control">
                    <h2>
                        Rempresentante Legal
                    </h2>
                    <p>Con facultades para firmar contratos</p>
                    <label for="tipo_documento">Tipo de documento</label>
                    <select name="tipo_documento" id="tipo_documento" class="form-control">
                        <option>Elegir</option>
                        @forelse($dates as $datos)
                            <option id="valorDoc">{{ $datos->tipo_doc }}</option>
                        @empty
                            <li>No hay datos para mostrar</li>
                        @endforelse
                    </select><br>
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" class="form-control" value="{{ old('numero') }}">
                    {!! $errors->first('numero', '<small>:message</small><br>') !!}
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <label for="movil">Teléfono Móvil</label>
                    <input type="number" name="movil" id="movil" class="form-control">
                </div>
                <div id="divThree" class="form-control">
                    <label for="tipo">Tipo de Cotización</label>
                    <select onclick="mostrarp()" name="tipo" id="tipo" class="form-control">
                        <option >Elegir</option>
                        @forelse($dates as $datos)
                            <option >{{ $datos->tipo_coti}}</option>
                        @empty
                            <li>No hay datos para mostrar</li>
                        @endforelse                      
                    </select>
                </div>
                <div class="premio2 my-2" id="mostrar">
                    <p class="lead text-center">Precio</p>
                    <div class="large-6 medium-6 column">
                        <h6 class="precio-plan text-center">Mensual</h6>
                        <h3 class="precio-mensual text-center" id="mostrar2">{{$mostrar->precio_plan}}</h3>
                    </div>
                    <div class="large-6 medium-6 column">
                        <h6 class="precio-plan text-center">Anual</h6>
                        <h3 class="precio-mensual text-center" id="mostrar3">-</h3>
                    </div>
                    <div class="large-6 medium-6 column">
                        <p class="text-center">Podrás elegir el plan de pago al final del proceso</p>
                    </div>
                </div>
                <div class="btn-cotizar">
                    <button class="btn btn-primary  btn-lg col-md-12 text-center btn btn-primary btn-lg" >Cotizar</button>
                </div>
            </form>
            @foreach ($plan as $precio)
                <div>
                    <ul class="list-group">
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
