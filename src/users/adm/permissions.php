<?php
require '../../../handle_db/connection.php';

$query = "SELECT email, 'admin' as permission FROM admin UNION SELECT email, 'student' as permission FROM student UNION SELECT email, 'teacher' as permission FROM teacher";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Permissions</title>
</head>

<body class="p-4 bg-[#FFF5D2]">
    <h1 class="mb-4 text-4xl font-semibold">Permissions List</h1>
    <div class="p-4 mb-4 bg-white rounded-md shadow-md">
        <div class="pb-2 mb-2 border-b border-gray-200">
            <p class="text-sm font-semibold">Permissions Information</p>
        </div>
        <div class="flex items-center justify-end">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" class="p-1 border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none">
        </div>
        <br>
        <table id="search-table" class="w-full border border-gray-300 rounded-md">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-2 py-1 border-r border-gray-300">#</th>
                    <th class="px-2 py-1 border-r border-gray-300">Email/User</th>
                    <th class="px-2 py-1 border-r border-gray-300">Permission</th>
                    <th class="px-2 py-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='text-center'>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $i . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['email'] . "</td>";
                    echo "<td class='px-2 py-1 border-r border-gray-300'>" . $row['permission'] . "</td>";
                    echo "<td class='px-2 py-1 text-center'>";
                    echo "<a href=''><i class='pr-8 fas fa-edit'></i></a>";
                    echo "<a href='/handle_db/delete_db.php?email=" . $row['email'] . "&permission=" . $row['permission'] . "'><i class='text-red-600 fas fa-trash'></i></a>";
                    echo "</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const searchTable = document.getElementById('search-table');

            if (searchInput && searchTable) {
                searchInput.addEventListener('input', () => {
                    const searchTerm = searchInput.value.toLowerCase();

                    for (const row of searchTable.getElementsByTagName('tr')) {
                        const nameCell = row.querySelector('td:nth-child(2)');

                        if (nameCell) {
                            const searchName = nameCell.textContent.toLowerCase();
                            if (searchName.indexOf(searchTerm) !== -1) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        }
                    }
                });
            }
        });
    </script>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>