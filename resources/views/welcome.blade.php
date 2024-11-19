<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Management System</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="bg-gray-100 font-sans text-gray-800 antialiased">
    <main>
        <div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 py-10">
            <div class="max-w-7xl w-full px-6">
                <header class="flex items-center justify-between py-6">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-3xl font-bold text-gray-900 max-md:text-lg">Product Management System</h1>
                    </div>
                    <div class="flex items-center space-x-3">
                        @auth
                            <a href="{{ url('/products') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none max-md:text-md">
                                Manage Products
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 bg-[#FF2D20] text-white rounded-lg hover:bg-red-700">Sign In
                            </a>
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 bg-transparent border-2 border-[#FF2D20] text-[#FF2D20] rounded-lg hover:bg-[#FF2D20] hover:text-white">Sign
                                Up
                            </a>
                        @endauth
                    </div>
                </header>

                <section
                    class="flex flex-col items-center justify-center space-y-8 py-16 px-4 bg-gradient-to-r from-[#FF2D20] to-[#ff8c00] text-white rounded-lg shadow-lg">
                    <h2 class="text-4xl font-semibold">Welcome to the Product Management System</h2>
                    <p class="text-xl">Efficiently track, manage, and scale your product portfolio.</p>
                    <a href="{{ url('/products') }}"
                        class="px-6 py-3 bg-white text-[#FF2D20] rounded-lg hover:bg-gray-200">Get
                        Started
                    </a>
                </section>

                <section class="py-16 px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-semibold text-gray-800">Key Features</h2>
                        <p class="text-lg text-gray-600">Everything you need to manage your products efficiently and
                            effectively.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                            <h3 class="text-xl font-semibold text-gray-800">Product Tracking</h3>
                            <p class="text-gray-600">Track product details, status, and progress in real-time.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                            <h3 class="text-xl font-semibold text-gray-800">Team Collaboration</h3>
                            <p class="text-gray-600">Collaborate with your team seamlessly to meet deadlines and
                                deliverables.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                            <h3 class="text-xl font-semibold text-gray-800">Complete CRUD Operations</h3>
                            <p class="text-gray-600">Create, edit, and delete any product seamlessly.
                            </p>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </main>
</body>

</html>
