<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: index.php");
    exit();
}

$cookie_student_id = isset($_COOKIE["student_id"])
    ? $_COOKIE["student_id"]
    : "Cookie not found";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Summary</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Summary</h1>

    <div class="summary">

        <h2>Student Information</h2>

        <p>
            <strong>Student ID:</strong>
            <?php echo htmlspecialchars($_SESSION["student_id"]); ?>
        </p>

        <p>
            <strong>Name:</strong>
            <?php echo htmlspecialchars($_SESSION["name"]); ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo htmlspecialchars($_SESSION["email"]); ?>
        </p>

        <p>
            <strong>Department:</strong>
            <?php echo htmlspecialchars($_SESSION["department"]); ?>
        </p>

        <h2>Academic Information</h2>

        <p>
            <strong>Semester:</strong>
            <?php echo htmlspecialchars($_SESSION["semester"]); ?>
        </p>

        <p>
            <strong>Course:</strong>
            <?php echo htmlspecialchars($_SESSION["course"]); ?>
        </p>

        <p>
            <strong>Credits:</strong>
            <?php echo htmlspecialchars($_SESSION["credits"]); ?>
        </p>

        <h2>Cookie Information</h2>

        <p>
            <strong>Remembered Student ID:</strong>
            <?php echo htmlspecialchars($cookie_student_id); ?>
        </p>

    </div>

    <a href="complete.php" class="button">
        Complete Registration
    </a>

</div>

</body>
</html>