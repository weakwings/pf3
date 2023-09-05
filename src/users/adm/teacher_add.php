<?php
include '../../../handle_db/connection.php';

$queryClassOptions = "SELECT id, subject FROM class";
$resultClassOptions = $mysqli->query($queryClassOptions);
$classOptions = [];

if ($resultClassOptions) {
    while ($row = $resultClassOptions->fetch_assoc()) {
        $classOptions[] = $row;
    }
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Add Teacher</title>
    <style>
        .shadow-custom {
            box-shadow: 4px 4px 6px 4px rgba(0, 0, 0, 0.1), 2px 2px 4px 4px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-4 bg-[#fbf3d4]">

    <form method="POST" action="/handle_db/add_teacher_db.php" class="p-4 bg-white w-[450px] shadow-custom rounded">
        <h1 class="mb-4 text-4xl font-semibold">Add Teacher</h1>
        <h2 class="text-xl font-semibold">Teacher Information</h2>
        <br>
        <div class="mb-4">
            <label for="dclass" class="block">Class:</label>
            <select name="dclass" id="dclass" class="p-1 border border-gray-300 rounded-md">
                <?php foreach ($classOptions as $option) : ?>
                    <option value="<?= $option['id']; ?>"><?= $option['subject']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="name" class="block">Name:</label>
            <input type="text" name="name" id="name" class="w-full p-1 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email:</label>
            <input type="email" name="email" id="email" class="w-full p-1 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="psswrd" class="block">Password:</label>
            <input type="password" name="psswrd" id="psswrd" class="w-full p-1 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="address" class="block">Address:</label>
            <input type="text" name="address" id="address" class="w-full p-1 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="dbirth" class="block">Date of birth:</label>
            <input type="date" name="dbirth" id="dbirth" class="p-1 border border-gray-300 rounded-md" required>
        </div>
        <br>
        <div class="flex justify-between mb-4">
            <a href="dashboard.php" class="px-4 py-2 font-bold text-white bg-red-600 rounded hover:bg-red-800">Leave</a>
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
</body>

</html>