@extends('vehicles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nuevo Vehiculo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('vehicles.index') }}"> Atras</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <label for="Name" class="form-label">Error!</label> Formato no Valido.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Marca:</label>
                    <input type="text" name="marca" class="form-control" placeholder="Marca">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Modelo:</label>
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Año:</label>
                    <input type="number" step="1" min="1900" name="anio" class="form-control" placeholder="Año">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Color:</label>
                    <input type="text" name="color" class="form-control" placeholder="Color">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Precio:</label>
                    <input type="number" step="0.1" min="0" name="precio" class="form-control" placeholder="Precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="Name" class="form-label">Placa:</label>
                    <input type="text" name="placa" class="form-control" placeholder="Placa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection
