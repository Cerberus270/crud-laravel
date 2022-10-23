@extends('vehicles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Vehiculos</h2>
            </div>
            <div class="pull-right mt-5">
                <a class="btn btn-success" href="{{ route('vehicles.create') }}"> Crear Nuevo Vehiculo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col">
            <table class="table table-hover table-bordered table-responsive mt-5">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Anio</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Placa</th>

                    <th width="280px">Action</th>
                </tr>
                </thead>
                @foreach ($vehicles as $vehicle)
                    <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $vehicle->marca }}</td>
                        <td>{{ $vehicle->modelo }}</td>
                        <td>{{ $vehicle->anio }}</td>
                        <td>{{ $vehicle->color }}</td>
                        <td>{{ $vehicle->precio}}</td>
                        <td>{{ $vehicle->placa }}</td>
                        <td>
                            <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}">Mostrar</a>

                                <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Editar</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>

            {!! $vehicles->links() !!}
        </div>
    </div>

@endsection
