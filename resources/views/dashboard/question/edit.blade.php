@extends('dashboard.master')
@section('content')

<div class="container">
    <form action="{{ route('question.update', $question->id) }}" method="post">
        @method('PUT')
        @include('dashboard.question.form_fields')
    </form>
</div>

@endsection
