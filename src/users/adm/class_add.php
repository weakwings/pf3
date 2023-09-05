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
    <title>Change the Subject</title>
    <style>
        .shadow-custom {
            box-shadow: 4px 4px 6px 4px rgba(0, 0, 0, 0.1), 2px 2px 4px 4px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-4 bg-[#fbf3d4]">

    <form method="POST" action="dashboard.php" class="p-4 bg-white w-[220px] shadow-custom rounded">
        <h1 class="mb-4 text-4xl font-semibold">Change the Subject</h1>
        <br>
        <h2 class="text-xl font-semibold">Subjects:</h2>
        <br>
        <div class="mb-4">
            <select name="dclass" id="dclass" class="p-1 border border-gray-300 rounded-md" onchange="changeSubject(this.value)">
                <?php foreach ($classOptions as $option) : ?>
                    <option value="<?= $option['id']; ?>"><?= $option['subject']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="flex justify-between mb-4">
            <a href="dashboard.php" class="px-4 py-2 font-bold text-white bg-red-600 rounded hover:bg-red-800">Leave</a>
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-800">Save</button>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/5b8d4d0297.js" crossorigin="anonymous"></script>
    <script>
        function changeSubject(value) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/handle_db/update_class_db.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    console.log(this.responseText);
                }
            }
            xhr.send("dclass=" + value + "&teacher_id=<?= $_GET['teacher_id'] ?>");
        }
    </script>
</body>

</html>