@extends('dashboard.master')
@section('content')
   
        <a href="{{ route('question.create') }}" class="btn btn-info btn-sm mb-3">Registrar un parcial</a>
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">r 1</th>
                    <th scope="col">r 2</th>
                    <th scope="col">r 3</th>
                    <th scope="col">r 4</th>
                    <th scope="col">r 5</th>
                    <th scope="col">r 6</th>
                    <th scope="col">r 7</th>
                    <th scope="col">r 8</th>
                    <th scope="col">r 9</th>
                    <th scope="col">r 10</th>
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
                        <td>{{ $question->respuesta6 }}</td>
                        <td>{{ $question->respuesta7 }}</td>
                        <td>{{ $question->respuesta8 }}</td>
                        <td>{{ $question->respuesta9 }}</td>
                        <td>{{ $question->respuesta10 }}</td>
                        <td>
                            <a href="{{ route('question.edit', $question->id) }}" class="btn btn-info btn-sm">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    
@endsection