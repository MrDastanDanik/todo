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

    <form method="POST" action="{{ route('task.create') }}">
        @csrf
        <input type="text" name="text" placeholder="Task">
        <input type="submit" value="Add">
    </form>

@endsection
