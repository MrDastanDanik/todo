<?php
/**
 * @var \App\Models\Task[] $tasks
 */
?>
@extends('layout')

@section('title', 'Tasks')

@section('content')
    <ul>
        @foreach($tasks as $task)
            <li>{{$task->text}}</li>
        @endforeach
    </ul>
@endsection
