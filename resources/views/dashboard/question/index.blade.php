@extends('dashboard.master')
@section('content')
    <a href="{{ route('question.create') }}" class="btn btn-info btn-sm mb-3">Registrar un parcial</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">respuesta 1</th>
                <th scope="col">respuesta 2</th>
                <th scope="col">respuesta 3</th>
                <th scope="col">respuesta 4</th>
                <th scope="col">respuesta 5</th>
                <th scope="col">respuesta 6</th>
                <th scope="col">respuesta 7</th>
                <th scope="col">respuesta 8</th>
                <th scope="col">respuesta 9</th>
                <th scope="col">respuesta 10</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->respuesta1 }}</td>
                    <td>{{ $question->respuesta2 }}</td>
                    <td>{{ $question->respuesta3 }}</td>
                    <td>{{ $question->respuesta4 }}</td>
                    <td>{{ $question->respuesta5 }}</td>
                    <td>
                        <a href="{{ route('pet.show', $pet->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('pet.edit', $pet->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $pet->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection