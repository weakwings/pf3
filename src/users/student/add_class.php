<?php
require '../../../handle_db/connection.php';

// Consulte o banco de dados para obter os itens
$query = "SELECT id, subject FROM class";
$result = $mysqli->query($query);
$items = $result->fetch_all(MYSQLI_ASSOC);
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
    <div class="flex justify-between bg-white rounded-md shadow-md">
        <div class="w-1/3 ml-2">
            <div class="flex items-center pb-2 mb-2 border-b border-gray-200">
                <p class="text-sm font-semibold">Disciplines to register</p>
            </div>
            <select id="item-list" multiple class="w-full h-48 mb-4 border border-gray-300 rounded-md"></select>
            <a href="/src/users/student/dashboard.php" id="back-button" class="px-4 py-2 mb-4 text-white bg-red-600 rounded-md hover:bg-red-800">Back</a>
            <button id="send-button" class="px-4 py-2 mb-4 text-white bg-blue-600 rounded-md hover:bg-blue-800">Register</button>
        </div>
        <div class="w-2/3 ml-2">
            <table class="w-full border border-gray-300 rounded-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-2 py-1 border-r border-gray-300">Disciplines</th>
                        <th class="px-2 py-1">Action</th>
                    </tr>
                </thead>
                <tbody id="selected-items"></tbody>
            </table>
        </div>
    </div>

    <script>
        function loadDisciplines() {
            fetch('get_class.php')
                .then(response => response.json())
                .then(data => {
                    const itemList = document.getElementById('item-list');

                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.id;
                        option.textContent = item.subject;
                        itemList.appendChild(option);
                    });
                });
        }

        window.addEventListener('load', loadDisciplines);
    </script>

    <script>
        const itemList = document.getElementById('item-list');
        const sendButton = document.getElementById('send-button');
        const selectedItems = document.getElementById('selected-items');

        sendButton.addEventListener('click', () => {
            const selectedOptions = Array.from(itemList.selectedOptions);

            selectedOptions.forEach(option => {
                const row = document.createElement('tr');
                const disciplineCell = document.createElement('td');
                disciplineCell.textContent = option.textContent;
                row.appendChild(disciplineCell);

                const actionCell = document.createElement('td');
                const deleteButton = document.createElement('button');
                deleteButton.innerHTML = '<i class="text-red-600 fas fa-trash-alt"></i>';
                deleteButton.addEventListener('click', () => {
                    itemList.appendChild(option);
                    row.remove();
                });
                actionCell.appendChild(deleteButton);
                row.appendChild(actionCell);

                selectedItems.appendChild(row);
                option.remove();
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>