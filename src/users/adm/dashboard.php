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

<body class="flex">
    <nav class="flex flex-col w-40 h-screen bg-slate-300 shadow-custom">
        <div class="flex items-center justify-center p-4 border-b border-slate-400">
            <img src="/img/logo.jpg" alt="Logo" class="w-8 h-8 mr-2 rounded-full">
            <p>University</p>
        </div>
        <div class="p-4 border-b border-slate-400">
            <p>admin</p>
            <p>administrator</p>
        </div>
        <div class="flex-grow p-4">
            <p class="text-sm text-center border-b border-slate-400">MENU ADMINISTRATOR</p>
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
    <div class="flex flex-col flex-grow">
        <div class="flex items-center justify-between p-4 bg-slate-200 shadow-custom">
            <div class="flex items-center">
                <i class="fa-solid fa-bars"></i>
                <p class="ml-2">Home</p>
            </div>
            <div class="flex items-center">
                <p>Administrador</p>
                <i class="ml-2 fa-solid fa-chevron-down"></i>
            </div>
        </div>
        <div class="flex-grow p-4 bg-[#fbf3d4]">
            <h1>Dashboard</h1>
        </div>
        <footer class="p-4 bg-slate-200 shadow-custom">
            Footer
        </footer>
    </div>

    <script>

// Seleciona os itens do menu
const menuItems = document.querySelectorAll('nav ul li p');

// Adiciona um evento de clique a cada item do menu
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        // Obtém o texto do item do menu selecionado
        const page = item.textContent;

        // Define o caminho para o arquivo.php correspondente
        const filePath = `/src/users/adm/${page.toLowerCase()}.php`;

        // Carrega o conteúdo do arquivo.php na definida na tela
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

