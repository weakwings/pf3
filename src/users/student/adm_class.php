<?php
require '../../../handle_db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title></title>
</head>

<body class="p-4 bg-[#FFF5D2]">
    <h1 class="mb-4 text-4xl font-semibold">Class Scheme</h1>
    <div class="p-4 mb-4 bg-white rounded-md shadow-md">
        <div class="flex justify-between">
            <div class="w-1/2 mr-2">
                <div class="flex items-center pb-2 mb-2 border-b border-gray-200">
                    <p class="text-sm font-semibold">School Subject</p>
                </div>
                <table class="w-full border border-gray-300 rounded-md">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-2 py-1 border-r border-gray-300">Disciplines</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="w-1/2 ml-2">
                <div class="flex items-center pb-2 mb-2 border-b border-gray-200">
                    <p class="text-sm font-semibold">Disciplines to register</p>
                </div>
                <div class="p-6 text-center">
                    <a href="./add_class.php" class="px-4 py-2 mt-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Register</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>