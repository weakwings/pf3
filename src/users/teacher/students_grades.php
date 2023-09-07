<?php
require '../../../handle_db/connection.php';

if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    $query = "SELECT * FROM student WHERE id = ?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("i", $student_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $grades = $row['grades'];
        } else {
            echo "Student not found.";
            exit;
        }
    } else {
        echo "Error in database query.";
        exit;
    }
} else {
    echo "student_id was not provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Edit Student Grades</title>
    <style>
        .shadow-custom {
            box-shadow: 4px 4px 6px 4px rgba(0, 0, 0, 0.1), 2px 2px 4px 4px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-4 bg-[#FFF5D2]">

    <form method="POST" action="/handle_db/update_grades_db.php" class="p-4 bg-white w-[450px] shadow-custom rounded">
        <h1 class="mb-4 text-4xl font-semibold text-center">Edit Student Grades</h1>
        <br>
        <h2 class="text-xl font-semibold">Edit Student Grades</h2>
        <br>
        <input type="hidden" name="student_id" value="<?= $student_id ?>">
        <div class="mb-4">
            <label for="grades" class="block">Grades:</label>
            <input type="text" name="grades" id="grades" class="w-full p-1 border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none" value="<?= $grades ?>">
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
