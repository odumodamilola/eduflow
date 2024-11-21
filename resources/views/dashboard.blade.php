<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('images/eduflow.png')}}" type="image/x-icon">
</head>

<body class="bg-gray-100 font-sans">

<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-green-600 text-white w-64 p-4 space-y-6 hidden md:block">
            <a href="{{route('dashboard')}}" class="flex items-center space-x-2">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('documents')}}" class="flex items-center space-x-2">
                <i class="fas fa-file-alt"></i>
                <span>Documents</span>
            </a>
            <a href="#" class="flex items-center space-x-2">
                <i class="fas fa-graduation-cap"></i>
                <span>Final Year Clearance</span>
            </a>
            <a href="{{route('profile.edit')}}" class="flex items-center space-x-2">
                <i class="fas fa-user-edit"></i>
                <span>Edit Profile</span>
            </a>
        </aside>
    
        <!-- Main Dashboard Content -->
        <main class="flex-1 p-6">
            <!-- Clearance Progress -->
            <div class="bg-white border border-gray-200 p-4 rounded shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Clearance Progress</h2>
                <div class="flex items-center mb-4">
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-600 h-4 rounded-full" style="width: 50%;"></div>
                    </div>
                    <span class="text-green-600 text-sm ml-4">50% Complete</span>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- Clearance Items -->
                    <div class="p-4 bg-green-50 border border-green-200 rounded flex items-center justify-between">
                        <span>Library</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Cleared</span>
                    </div>
                    <div class="p-4 bg-red-50 border border-red-200 rounded flex items-center justify-between">
                        <span>Department</span>
                        <span class="text-red-600"><i class="fas fa-exclamation-circle"></i> Not Cleared</span>
                    </div>
                    <div class="p-4 bg-green-50 border border-green-200 rounded flex items-center justify-between">
                        <span>Laboratory</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Cleared</span>
                    </div>
                    <div class="p-4 bg-red-50 border border-red-200 rounded flex items-center justify-between">
                        <span>College</span>
                        <span class="text-red-600"><i class="fas fa-exclamation-circle"></i> Not Cleared</span>
                    </div>
                    <div class="p-4 bg-green-50 border border-green-200 rounded flex items-center justify-between">
                        <span>Bursary</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Cleared</span>
                    </div>
                    <div class="p-4 bg-red-50 border border-red-200 rounded flex items-center justify-between">
                        <span>Student Affairs</span>
                        <span class="text-red-600"><i class="fas fa-exclamation-circle"></i> Not Cleared</span>
                    </div>
                    <div class="p-4 bg-green-50 border border-green-200 rounded flex items-center justify-between">
                        <span>Sport</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Cleared</span>
                    </div>
                    <div class="p-4 bg-red-50 border border-red-200 rounded flex items-center justify-between">
                        <span>Internal Audit</span>
                        <span class="text-red-600"><i class="fas fa-exclamation-circle"></i> Not Cleared</span>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
</x-app-layout>









   
</body>

</html>
