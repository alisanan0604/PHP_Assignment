<!DOCTYPE html>
<html>
<head>
    <title>User Name</title>
</head>
<body>

    <form method="post">
        <label>Enter your name:</label>
        <input type="text" name="username" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["username"];
        echo "Hello, " . $name;
    }
    ?>

</body>
</html>