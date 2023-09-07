<?php
require '../../../handle_db/connection.php';

if (!isset($_SESSION['user_login']) || $_SESSION['user_login'] !== true) {
    header('Location: /src/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>University</title>
    <style>
        .shadow-custom {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="flex font-custom">
    <nav class="flex flex-col w-40 h-screen h-1200 bg-slate-300 shadow-custom">
        <div class="flex items-center justify-center p-4 border-b border-[#00000050]">
            <img src="/img/logo.jpg" alt="Logo" class="w-8 h-8 mr-2 rounded-full">
            <p>University</p>
        </div>
        <div class="p-4 border-b border-[#00000050]">
            <p>admin</p>
            <p>Nick</p>
        </div>
        <div class="flex-grow p-4">
            <p class="text-sm text-center">MENU ADMINISTRATOR</p>
            <ul class="mt-4">
                <li class="flex items-center mb-2">
                    <i class="w-6 mr-2 fa-solid fa-user-shield"></i>
                    <p class="cursor-pointer">Permissions</p>
                </li>
                <li class="flex items-center mb-2">
                    <i class="w-6 mr-2 fa-solid fa-user-tie"></i>
                    <p class="cursor-pointer">Teachers</p>
                </li>
                <li class="flex items-center mb-2">
                    <i class="w-6 mr-2 fa-solid fa-user-graduate"></i>
                    <p class="cursor-pointer">Students</p>
                </li>
                <li class="flex items-center mb-2">
                    <i class="w-6 mr-2 fa-solid fa-chalkboard-teacher"></i>
                    <p class="cursor-pointer">Class</p>
                </li>
            </ul>
        </div>
    </nav>
    <div class="flex flex-col flex-grow ">
        <div class="flex items-center justify-between p-5 border-b border-[#00000030] bg-slate-200 shadow-custom">
            <div class="flex items-center">
                <i class="fa-solid fa-bars"></i>
                <p id="home-button" class="ml-2 cursor-pointer">Home</p>
            </div>
            <div class="flex items-center">
                <p>Nick</p>
                <a href="/handle_db/logout.php" class="pl-4 ml-2 cursor-pointer"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
        <div class="flex-grow p-4 bg-[#FFF5D2] relative">
            <h1>Welcome</h1>
            <div class="absolute inset-0 flex items-center justify-center logo-container">
                <img src="/img/logo.jpg" alt="Logo" class="max-w-full max-h-full" id="dashboard-logo">
            </div>
        </div>
        <footer class="p-4 bg-slate-200 border-t border-[#00000030] shadow-custom">
            <h1>Created by Felipe Messias</h1>
        </footer>
    </div>

    <script>
        const homeButton = document.querySelector('#home-button');
        homeButton.addEventListener('click', () => {
            location.reload();
        });
    </script>

    <script>
        const menuItems = document.querySelectorAll('nav ul li p');

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                const page = item.textContent;
                const filePath = `/src/users/adm/${page.toLowerCase()}.php`;

                document.getElementById('dashboard-logo').classList.add('hidden');

                fetch(filePath)
                    .then(response => response.text())
                    .then(content => {
                        document.querySelector('.flex-grow h1').innerHTML = content;
                    });
            });
        });

        function showImage() {
            document.getElementById('dashboard-logo').classList.remove('hidden');
        }
    </script>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>

</body>

</html>