<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="{{asset('images/eduflow.png')}}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">
    <!-- resources/views/dashboard.blade.php -->
<!-- resources/views/documents.blade.php -->
<x-app-layout>
    <div class="flex mt-5">
        <!-- Sidebar -->
        <aside class="bg-green-600 text-white w-64 p-4 space-y-6 hidden md:block">
          
            <a href="{{route('documents')}}" class="flex items-center space-x-2 text-green-400">
                <i class="fas fa-file-alt"></i>
                <span>Documents</span>
            </a>
            <a href="#" class="flex items-center space-x-2">
                <i class="fas fa-graduation-cap"></i>
                <span>Final Year Clearance</span>
            </a>
            <a href="{{ route('profile.edit')}}" class="flex items-center space-x-2">
                <i class="fas fa-user-edit"></i>
                <span>Edit Profile</span>
            </a>
            <a href="{{ route('profile.settings')}}" class="flex items-center space-x-2">
                <i class="fas fa-cog"></i>
                <span>Accounts Settings</span>
            </a>
        </aside>

        <!-- Main Documents Content -->
<main class="flex-1 p-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">My Documents</h2>
    
    
    <!-- Display success or error messages -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Flex Container for Documents and Upload Form -->
    <div class="flex flex-col gap-6">
        <!-- Document Upload Form -->
        <div class="p-4 bg-white border border-gray-200 rounded shadow-sm flex flex-col items-center">
            <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="upload" class="cursor-pointer w-24 h-24 bg-gray-100 flex items-center justify-center rounded mb-2 hover:bg-gray-200">
                    <i class="fas fa-upload text-gray-400 text-4xl"></i>
                </label>
                <input type="file" id="upload" name="document" class="hidden" onchange="this.form.submit()">
                <p class="text-center text-gray-700">Upload a document</p>
            </form>
        </div>
        <!-- Document Items -->
        <div class="flex-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($documents as $document)
                    <div class="p-4 bg-white border border-gray-200 rounded shadow-sm flex flex-col items-center">
                        <div class="w-24 h-24 bg-gray-100 flex items-center justify-center rounded mb-2">
                            <i class="fas fa-file-alt text-gray-400 text-4xl"></i>
                        </div>
                        <p class="text-center text-gray-700">{{ $document->file_name }}</p>
                        <a href="{{ Storage::url($document->file_path) }}" class="text-blue-600 hover:underline mt-2">View</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

    </div>
</x-app-layout>









   
</body>

</html>
