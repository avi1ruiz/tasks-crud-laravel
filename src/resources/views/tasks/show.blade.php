@extends('layout.main')

@section('title', 'Informacion')

@section('content')
    <div>
        <h3>
            {{ $tasks->title }}
        </h3>
        <ul>
            <li>Estado: <strong>{{ $tasks->state() }}</strong></li>
            <li>Fecha de entrega: {{ $tasks->limit }}</li>
        </ul>
        <h6>Descripción de la tarea</h6>
        <p>{{ $tasks->description }}</p>
        <hr>
        <form action="{{ route('tasks.destroy', $tasks) }}" method="POST">
            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
