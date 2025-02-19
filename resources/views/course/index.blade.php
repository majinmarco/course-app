@extends('layouts.app')

@section('content')
    <div class="container flex flex-col justify-center mb-6">
        <h1 class="pt-2 pl-6 mb-2 font-sans text-xl font-bold text-red-400">Courses</h1>
        <div class="grid content-center w-auto grid-cols-1 gap-6 mx-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($courses as $course)
                <a class="w-full h-auto p-4 bg-gray-100 border-2 border-gray-200 rounded-lg shadow-lg select-none hover:shadow-2xl hover:bg-gray-300 active:bg-gray-400 active:border-gray-300 transition-transform ease-in-out duration-200 hover:scale-[1.05]"
                    href="{{ route('course.show', $course->id) }}">
                    <h1 class="-mt-1 text-lg font-semibold text-red-400 underline">{{ $course->title }}</h1>
                    <h2 class="-mt-1 text-xs text-cyan-700">{{ $course->instructor }}</h2>
                    <p class="mt-2 leading-5 text-s text-cyan-900">{{ $course->description }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
