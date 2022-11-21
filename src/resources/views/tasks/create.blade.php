@extends('layout.main')

@section('title', 'Agregar Tarea')

@section('content')
    <div class="d-flex align-items-start justify-content-between">

        <form action="{{ route('tasks.store') }}" method="POST" class="card col-sm-6 px-4 py-2">
            <x-tasks-form-body/>
        </form>

        <div class="col-sm-6 px-5 py-2">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>


@endsection
