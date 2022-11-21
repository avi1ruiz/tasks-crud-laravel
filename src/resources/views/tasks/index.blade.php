@extends('layout.main')

@section('title', 'Listado tareas')

@section('content')
    <h1>Listado de tareas</h1>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Fecha limite
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->state() }}</td>
                    <td>{{ $task->limit->format('H:i d/m/y') }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}">Editar</a>
                        <a href="{{ route('tasks.show', $task) }}">Mostrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
