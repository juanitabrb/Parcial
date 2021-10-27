@extends('dashboard.master')

@section('content')
    <div class="container">
        <h1>PARCIAL ING. SOFTWARE II</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('question.store') }}" method="post">
            @include('dashboard.question.form_fields')
        </form>

        

    </div>
@endsection