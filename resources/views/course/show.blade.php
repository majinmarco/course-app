@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Course</title>
    </head>

    <body>
        <h1>Show Course</h1>
        <p>Title: {{ $course->title }}</p>
        <p>Instructor: {{ $course->instructor }}</p>
        <p>Description: {{ $course->description }}</p>
        <a href="{{ route('course.edit', $course->id) }}">Edit</a>
    </body>
@endsection
