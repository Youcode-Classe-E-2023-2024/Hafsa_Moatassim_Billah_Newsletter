<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }

            .section-small {
                width: 50%;
            }
        }
    </style>
</head>
<body>
<div class="flex flex-col h-screen bg-gray-100">
    <div class="flex-1 flex">
        <div class="p-2 bg-white w-60 flex flex-col hidden md:flex" id="sideNav">
            <nav>
                <div class="hidden p-10 md:flex items-center">
                    <img src="picture/logo.png" alt="Logo" class="w-28 h-18 mr-2">
                </div>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/dashboard"><i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/users"><i class="fas fa-file-alt mr-2"></i>Users
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="#">
                    <i class="fas fa-users mr-2"></i>Usuarios
                </a>
                     {{--***********************************--}}

                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/dashredacteur"><i class="fas fa-home mr-2"></i>Dashboard
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/subscribers"><i class="fas fa-file-alt mr-2"></i>Subscribers
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/upload">
                    <i class="fas fa-users mr-2"></i>Upload
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white"
                   href="/media">
                    <i class="fas fa-users mr-2"></i>Media
                </a>
                {{--                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">--}}
                {{--                    <i class="fas fa-store mr-2"></i>Comercios--}}
                {{--                </a>--}}
                {{--                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white" href="#">--}}
                {{--                    <i class="fas fa-exchange-alt mr-2"></i>Transacciones--}}
                {{--                </a>--}}
            </nav>


            <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto"
               href="#">
                <i class="fas fa-sign-out-alt mr-2"></i>Logout
            </a>

        </div>

        <script>

            const menuBtn = document.getElementById('menuBtn');
            const sideNav = document.getElementById('sideNav');

            menuBtn.addEventListener('click', () => {
                sideNav.classList.toggle('hidden');
            });
        </script>
</body>
</html>
