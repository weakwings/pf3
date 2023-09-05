<?php
include '../../../handle_db/connection.php';

$query = "SELECT id, DNI, name, email, address, dbirth FROM student";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Students</title>
</head>

<body class="p-4 bg-[#fbf3d4]">
    <h1 class="mb-4 text-4xl font-semibold">Students List</h1>
    <div class="p-4 mb-4 bg-white rounded-md shadow-md">
        <div class="flex items-center justify-between pb-2 mb-2 border-b border-gray-200">
            <p class="text-sm font-semibold">Students Informations</p>
            <a href="student_add.php" class="px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Add Student</a>
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
                <th class="px-2 py-1 border-r border-gray-300">DNI</th>
                <th class="px-2 py-1 border-r border-gray-300">Name</th>
                <th class="px-2 py-1 border-r border-gray-300">Email</th>
                <th class="px-2 py-1 border-r border-gray-300">Address</th>
                <th class="px-2 py-1 border-r border-gray-300">Date of Birth</th>
                <th class="px-2 py-1">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['id'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['DNI'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['name'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['email'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['address'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['dbirth'] . "</td>";
                    echo "<td class='px-2 py-1'><a href=''><i class='fas fa-edit'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
    </table>
    </div>
    

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>