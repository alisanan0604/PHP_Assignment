<!DOCTYPE html>
<html>
<body>

<h2>User Registration</h2>

<form method="post">

    Full Name:
    <input type="text" name="fullname" required>
    <br><br>

    Date of Birth:
    <input type="date" name="dob" required>
    <br><br>

    Email ID:
    <input type="text" name="email" required>
    <br><br>

    Mobile:
    <input type="text" name="mobile" required>
    <br><br>

    <input type="checkbox" name="terms">
    I agree to the terms and conditions
    <br><br>

    <input type="submit" value="Register">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"]);
    $dob = $_POST["dob"];
    $email = trim($_POST["email"]);
    $mobile = trim($_POST["mobile"]);

    $errors = array();

    if (count(preg_split('/\s+/', $fullname)) != 2) {
        $errors[] = "Full name must contain two words.";
    }

    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    if ($age <= 18) {
        $errors[] = "Age must be above 18.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email ID.";
    }

    if (!preg_match('/^[0-9]{10}$/', $mobile)) {
        $errors[] = "Mobile number must be exactly 10 digits.";
    }

    if (!isset($_POST["terms"])) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    if (empty($errors)) {
        echo "<h3>Successful Registration</h3>";
    } else {
        echo "<h3>Error:</h3>";

        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>

</body>
</html>