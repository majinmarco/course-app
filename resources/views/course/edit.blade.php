@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>
        <form action="{{ route('course.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')<!-- This tells Laravel to treat the request as a PUT -->
            <!-- Your form fields here -->
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $course->title }}">
            <br>
            <label for="instructor">Instructor:</label>
            <input type="text" name="instructor" id="instructor" value="{{ $course->instructor }}">
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $course->description }}</textarea>
            <br>
            <input type="submit" value="Update Course">
        </form>
        <!-- Must separate DELETE form from the rest of the form -->

        <form action="{{ route('course.destroy', $course->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this course?');">Delete</button>
        </form>
        <input type="button" value="Cancel" onclick="location.href='{{ route('course.index') }}';">
    </div>
@endsection
