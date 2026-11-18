
<?php
$name = "";
$student_id = "";
$department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $student_id = $_POST["student_id"];
    $department = $_POST["department"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>
</head>
<body>

    <h1>Student Information Form</h1>

    <form method="POST">

        <label>Student Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Student ID:</label>
        <input type="text" name="student_id" required>
        <br><br>

        <label>Department:</label>
        <input type="text" name="department" required>
        <br><br>

        <button type="submit">Submit</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Student Details</h2>";
        echo "<p>Name: " . htmlspecialchars($name) . "</p>";
        echo "<p>ID: " . htmlspecialchars($student_id) . "</p>";
        echo "<p>Department: " . htmlspecialchars($department) . "</p>";
    }
    ?>

</body>
</html>
