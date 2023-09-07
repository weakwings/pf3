<?php
require '../../../handle_db/connection.php';
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
    <nav class="flex flex-col w-40 h-screen bg-slate-300 shadow-custom">
        <div class="flex items-center justify-center p-4 border-b border-[#00000050]">
            <img src="/img/logo.jpg" alt="Logo" class="w-8 h-8 mr-2 rounded-full">
            <p>University</p>
        </div>
        <div class="p-4 border-b border-[#00000050]">
            <p>Teacher</p>
            <p class="text-lg hover:text-blue-700"><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User'; ?></p>
        </div>
        <div class="flex-grow p-4">
            <p class="text-sm text-center">MENU STUDENT</p>
            <ul class="mt-4">
                <li class="flex items-center mb-2">
                    <i class="w-6 mr-2 fa-solid fa-chalkboard"></i>
                    <p class="cursor-pointer">Students</p>
                </li>
            </ul>
        </div>
    </nav>
    <div class="flex flex-col flex-grow">
        <div class="flex items-center justify-between p-4 border-b border-[#00000030] bg-slate-200 shadow-custom">
            <div class="flex items-center">
                <i class="fa-solid fa-bars"></i>
                <p id="home-button" class="ml-2 cursor-pointer">Home</p>
            </div>
            <div class="flex items-center">
                <p class="pr-2">User:</p>
                <p class="text-lg hover:text-blue-700"><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User'; ?></p>
                <a href="/handle_db/logout.php" class="pl-4 ml-2 cursor-pointer"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
        <div class="flex-grow p-4 bg-[#FFF5D2] relative bg-center bg-no-repeat bg-contain" style="background-image: url('/img/logo.jpg')">
            <h1>Welcome</h1>
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
        const pageMap = {
            'Students': 'students'
        };

        const menuItems = document.querySelectorAll('nav ul li p');

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                const page = item.textContent;
                const fileName = pageMap[page] ? pageMap[page] : page.toLowerCase();
                const filePath = `/src/users/teacher/${fileName}.php`;

                fetch(filePath)
                    .then(response => response.text())
                    .then(content => {
                        document.querySelector('.flex-grow h1').innerHTML = content;
                    });
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>

</body>

</html>