@extends('layout')

@section('title', 'Home')

@section('content')
    Undone tasks: {{ $undone_tasks_count }}
@endsection