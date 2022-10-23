@extends('vehicles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Vehiculo</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <h4>Detalles Vehiculo</h4>
            <hr />
            <dl class="row">
                <dt class = "col-sm-2">
                    Marca
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->marca }}
                </dd>
                <dt class = "col-sm-2">
                    Modelo
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->modelo }}
                </dd>
                <dt class = "col-sm-2">
                    Año
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->anio }}
                </dd>
                <dt class = "col-sm-2">
                    Color
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->color }}
                </dd>
                <dt class = "col-sm-2">
                    Precio
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->precio }}
                </dd>
                <dt class = "col-sm-2">
                    Placa
                </dt>
                <dd class = "col-sm-10">
                    {{ $vehicle->placa }}
                </dd>
            </dl>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Atras</a>
            </div>
        </div>
    </div>
@endsection
