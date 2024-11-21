<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduflow - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/eduflow.png')}}" type="image/x-icon">
</head>
<body class="bg-gray-50">
    <header class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
              <a href="/">
                <img src="{{ asset('images/eduflow.png') }}" alt="Eduflow Logo" class="h-20">
              </a>
            </div>
            <nav class="flex space-x-6 text-gray-600">
                <a href="/" class="hover:text-green-600">Home</a>
                @auth
                    <a href="{{route('dashboard')}}" class="hover:text-green-600">Dashboard</a>
                    <a href="{{route('profile.show')}}" class="hover:text-green-600">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Log out</button>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="hover:text-green-600">Registration</a>
                    <a href="#" class="hover:text-green-600">Help</a>
                    <a href="{{ route('login') }}" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Log in</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-16 flex items-center">
        <div class="w-1/2">
            <h1 class="text-4xl font-bold text-green-600">From Freshers to Final year.<br> Manage your University Journey with Ease.</h1>
            <p class="text-gray-600 mt-4">Tailored features for every stage, helping you excel academically.</p>
            <a href="#" class="inline-block bg-white text-green-600 border border-green-600 py-2 px-4 mt-6 rounded hover:bg-green-600 hover:text-white">Get Started</a>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('images/student.png') }}" alt="Students" class="w-full h-auto">
        </div>
       
    </main>
    
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-5">
          <div class="flex flex-wrap justify-between">
            <!-- Branding -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
              <h2 class="text-2xl font-bold">Eduflow</h2>
              <p class="mt-2">Helping students have a 
                seamless registration virtual experience 
                from 100level till their final year clearance.</p>
            </div>
            <!-- Navigation Links -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
              <h3 class="text-xl font-semibold">Quick Links</h3>
              <ul class="mt-2">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Registration</a></li>
                <li><a href="#" class="hover:underline">Help</a></li>
              </ul>
            </div>
            <!-- Contact Information -->
            <div class="w-full md:w-1/3">
              <h3 class="text-xl font-semibold">Contact Us</h3>
              <p class="mt-2">Email: support@eduflow.com</p>
              <p>Phone: +234 7019 087355</p>
            </div>
          </div>
          <div class="flex flex-wrap justify-between items-center mt-8">
            <!-- Social Media Icons -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
              <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-gray-400 hover:text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <!-- Newsletter Form -->
            <div class="w-full md:w-1/2 text-right">
              <form class="flex items-center">
                <input type="email" placeholder="Subscribe to our newsletter" class="bg-gray-700 text-white py-2 px-4 rounded-l">
                <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-r hover:bg-green-700">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
    </footer>
</body>
</html>
