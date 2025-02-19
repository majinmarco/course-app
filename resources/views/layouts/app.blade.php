<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Course App</title>
</head>

<nav class="w-screen p-2 border-b-4 border-red-300 rounded-sm shadow-sm h-22 bg-cyan-600">
    <div class="flex flex-row items-center justify-between">
        <a
            href="{{ route('home') }}"class="flex-row pl-3 mb-1 font-sans text-2xl font-black text-red-400 hover:text-red-300 active:text-red-200">Courses
            App</a>
        <input class="flex items-center px-2 text-gray-500 border-2 border-gray-200 rounded-lg h-2/3"
            placeholder="Search">
        </input>
    </div>
    <section class="flex justify-even items-bottom">
        <a class="pt-1 pb-1 pl-2 pr-2 mt-1 ml-2 mr-3 text-sm text-white border rounded-full shadow-md border-cyan-400 bg-cyan-600 hover:bg-cyan-700 active:bg-cyan-900"
            href="{{ route('course.index') }}">Courses</a>
        <a class="pt-1 pb-1 pl-2 pr-2 mt-1 text-sm text-white border rounded-full shadow-md border-cyan-400 bg-cyan-600 hover:bg-cyan-700 active:bg-cyan-900"
            href="{{ route('course.create') }}">Create Course</a>
        <span class="w-2/3"></span>
    </section>
</nav>

<body class="bg-cyan-100">
    <div>
        @yield('content')
    </div>
</body>

</html>
