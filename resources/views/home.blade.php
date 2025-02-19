@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center select-none">
        <h1 class="flex justify-center mt-4 mb-20 text-3xl font-bold text-red-300">Home</h1>
        <card
            class="flex flex-col items-center justify-center w-1/2 h-auto p-2 bg-gray-100 border-2 border-gray-200 rounded-lg shadow-lg">
            <p class="text-xl font-medium text-center text-gray-600 underline">Welcome to the Course App!</p>
            <p class="pt-2 text-justify text-gray-600 text-md">This app demonsrates my progress in learning CSS tailwind and
                Laravel.</p>
        </card>
    </div>
@endsection
