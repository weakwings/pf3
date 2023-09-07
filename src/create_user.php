<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Create User</title>
</head>
<body class="bg-[#FFF5D2]">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <img class="mx-auto w-80 h-80" src="/img/logo.jpg" alt="Logo">
            <form action="/handle_db/create_adm_db.php" method="post">
                <input class="w-full p-2 border rounded focus:border-blue-500 focus:outline-none" type="text" name="username" placeholder="Nome de usuário">
                <input class="w-full p-2 border rounded focus:border-blue-500 focus:outline-none" type="text" name="email" placeholder="Email">
                <input class="w-full p-2 border rounded focus:border-blue-500 focus:outline-none" type="password" name="password" placeholder="Senha">
                <div class="pt-10">
                    <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Create User</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
