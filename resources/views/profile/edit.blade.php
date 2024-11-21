<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">
    <x-app-layout>
        <div class="flex flex-col md:flex-row">
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

            <!-- Main content -->
            <div class="w-full md:w-3/4 p-4">
                <!-- Profile section -->
                <div class="flex items-center mb-4">
                    @if (Auth::user()->profile_picture)
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="rounded-full w-24 h-24 object-cover">
                    @else
                        <div class="rounded-full bg-green-300 w-24 h-24"></div>
                    @endif
                    <div class="ml-4">
                        <h2 class="text-xl font-bold">{{ Auth::user()->name }}</h2>
                        <p class="text-gray-600">Computer Science</p>
                    </div>
                </div>
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
