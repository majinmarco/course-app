@extends('layouts.app')

@section('content')
    <div class="container">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Create Course</title>
        </head>

        <body>
            <h1>Create Course</h1>
            <form action="{{ route('course.store') }}" method="POST">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" id="title">
                <br>
                <label for="instructor">Instructor:</label>
                <input type="text" name="instructor" id="instructor">
                <br>
                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea>
                <br>
                <input type="submit" value="Create Course">
            </form>
        </body>
    </div>
@endsection
