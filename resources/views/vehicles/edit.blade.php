@extends('vehicles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Vehiculo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Atras</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <label for="Name" class="form-label">Whoops!</label> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehicles.update',$vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Marca:</label>
                    <input type="text" name="marca" value="{{ $vehicle->marca }}" class="form-control" placeholder="Marca">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Modelo:</label>
                    <input type="text" name="modelo" value="{{ $vehicle->modelo }}" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Anio:</label>
                    <input type="text" name="anio" value="{{ $vehicle->anio }}" class="form-control" placeholder="Anio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Color:</label>
                    <input type="text" name="color" value="{{ $vehicle->color }}" class="form-control" placeholder="Color">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Precio:</label>
                    <input type="text" name="precio" value="{{ $vehicle->precio }}" class="form-control" placeholder="Precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Placa:</label>
                    <input type="text" name="placa" value="{{ $vehicle->placa }}" class="form-control" placeholder="Placa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection
