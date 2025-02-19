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
            <h1 class="flex justify-center mt-4 mb-10 text-3xl font-bold text-red-300">Create Course</h1>

            <form action="{{ route('course.store') }}" method="POST"
                class = "flex flex-col justify-center h-auto p-4 mx-4 bg-gray-100 border-2 border-gray-200 rounded-lg shadow-lg">
                @csrf
                <label for="title" class="font-medium text-gray-600 font-sm ">Title:</label>
                <input type="text" name="title" id="title"
                    class="flex items-center px-2 text-gray-500 border-2 border-gray-200 rounded-lg h-2/3">
                <br>
                <label for="instructor" class="mt-4 font-medium text-gray-600 font-sm">Instructor:</label>
                <input type="text" name="instructor" id="instructor"
                    class="flex items-center px-2 text-gray-500 border-2 border-gray-200 rounded-lg h-2/3">
                <br>
                <label for="description" class="mt-4 font-medium text-gray-600 font-sm">Description:</label>
                <textarea name="description" id="description"
                    class="flex items-center px-2 text-gray-500 border-2 border-gray-200 rounded-lg h-2/3"></textarea>
                <br>
                <div class="flex justify-center w-full mt-4">
                    <input type="submit" value="Create"
                        class="w-1/3 pt-1 pb-1 pl-2 pr-2 text-sm text-white border rounded-full shadow-md cursor-pointer border-cyan-400 bg-cyan-600 hover:bg-cyan-700 active:bg-cyan-900">
                </div>
            </form>

            <!-- Pop-up Modal (Only Displays if Errors Exist) -->
            @if ($errors->any())
                <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
                    <div class="max-w-sm p-6 bg-white rounded shadow-lg">
                        <p class="font-semibold text-red-600">Something isn't right...</p>
                        <p class="text-gray-500 ">Please make sure the form is completely filled.</p>
                        <button onclick="closeModal()"
                            class="px-4 py-2 mt-4 text-white transition bg-red-500 rounded hover:bg-red-600">
                            Close
                        </button>
                    </div>
                </div>

                <script>
                    function closeModal() {
                        document.querySelector('.fixed').style.display = 'none';
                    }
                </script>
            @endif
        </body>
    </div>
@endsection
