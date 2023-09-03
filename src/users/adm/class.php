<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Class</title>
</head>

<body class="p-4 bg-[#fbf3d4]">
    <h1 class="mb-4 text-4xl font-semibold">Class List</h1>
    <div class="p-4 mb-4 bg-white rounded-md shadow-md">
        <div class="flex items-center justify-between pb-2 mb-2 border-b border-gray-200">
            <p class="text-sm font-semibold">Class Informations</p>
            <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Add Class</button>
        </div>
        <div class="flex items-center justify-end">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" class="p-1 border border-gray-300 rounded-md">
        </div>
        <br>
        <table class="w-full border border-gray-300 rounded-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-2 py-1 border-r border-gray-300">#</th>
                    <th class="px-2 py-1 border-r border-gray-300">Class</th>
                    <th class="px-2 py-1 border-r border-gray-300">Teacher</th>
                    <th class="px-2 py-1">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>