@extends('dashboard.master')
@section('content')
<form action="{{ route('question.update', $question->id) }}" method="post">
    @method('PUT')
    @include('dashboard.question.form_fields')
</form>