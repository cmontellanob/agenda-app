<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<ul class="flex">
  <li class="mr-6">
    <a class="text-blue-500 hover:text-blue-800" href="#">Active</a>
  </li>
  <li class="mr-6">
    <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
  </li>
  <li class="mr-6">
    <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
  </li>
  <li class="mr-6">
    <a class="text-gray-400 cursor-not-allowed" href="#">Disabled</a>
  </li>
</ul>
    <!-- Sidebar -->
    <div class="h-screen w-64 bg-gray-800 text-gray-100 fixed top-0 left-0 overflow-y-auto ">
        <div class="p-4">
            <h class="text-lg font-bold">Agenda 2024</h>
            <!-- Add your sidebar menu items here -->
            <ul class="mt-4">
                <li><a href="/" class="block py-2 px-4 text-white hover:bg-gray-700">Cuadro</a></li>
                <li><a href="{{route('profesion.index')}}" class="block py-2 px-4 text-white hover:bg-gray-700">Profesiones</a></li>
                <li><a href="{{route('agenda.index')}}" class="block py-2 px-4 text-white hover:bg-gray-700">Agenda</a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
    </div>

    <!-- Content Area -->
    <div class="ml-64 p-4 "> <!-- ml-64 to offset the sidebar width -->
        <!-- Header -->
        <header class="bg-white shadow-md p-4 mb-4 hidden">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold">Bienvenido Usuario</h2>
                </div>
                <div>
                    <!-- Add any header actions or components here -->
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="bg-white p-6 shadow-md">
            @yield('content')

        </div>
    </div>

</body>
</html>
