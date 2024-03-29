<?php
require '../../../handle_db/connection.php';

$query = "SELECT student.id, student.name as student, student.grades as grades FROM student";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Class</title>
</head>

<body class="p-4 bg-[#FFF5D2]">
    <h1 class="mb-4 text-4xl font-semibold">Class List</h1>
    <div class="p-4 mb-4 bg-white rounded-md shadow-md">
        <div class="flex items-center justify-between pb-2 mb-2 border-b border-gray-200">
            <p class="text-sm font-semibold">Class Informations</p>
        </div>
        <div class="flex items-center justify-end">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" class="p-1 border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none">
        </div>
        <br>
        <table class="w-full border border-gray-300 rounded-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-2 py-1 border-r border-gray-300">#</th>
                    <th class="px-2 py-1 border-r border-gray-300">Student</th>
                    <th class="px-2 py-1 border-r border-gray-300">Grades</th>
                    <th class="px-2 py-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='text-center'>";
                    echo "<td class='px-2 py-1 text-center border-r border-gray-300'>" . $row['id'] . "</td>";
                    echo "<td class='px-2 py-1 text-center border-r border-gray-300'>" . $row['student'] . "</td>";
                    echo "<td class='px-2 py-1 text-center border-r border-gray-300'>" . $row['grades'] . "</td>";
                    echo "<td class='px-2 py-1 text-center'><a href='students_grades.php?student_id=" . $row['id'] . "'><i class='fa-solid fa-clipboard-check'></i></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>
