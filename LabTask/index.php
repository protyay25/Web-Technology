<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["student_id"] = $_POST["student_id"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["department"] = $_POST["department"];

    if (isset($_POST["remember"])) {
        setcookie("student_id", $_POST["student_id"], time() + (86400 * 30), "/");
    }

    header("Location: academic.php");
    exit();
}

$remembered_id = isset($_COOKIE["student_id"]) ? $_COOKIE["student_id"] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal - Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>University Portal</h1>
    <h2>Student Registration</h2>

    <form method="POST" action="">

        <label>Student ID</label>
        <input type="text" name="student_id"
               value="<?php echo htmlspecialchars($remembered_id); ?>"
               required>

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="English">Economics</option>
        </select>

        <div class="checkbox">
            <input type="checkbox" name="remember">
            <span>Remember Student ID</span>
        </div>

        <button type="submit">Next</button>

    </form>

</div>

</body>
</html>