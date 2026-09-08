<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Marks:
    <input type="number" name="marks" min="0" max="1000" required>
    <input type="submit" value="Calculate Grade">
</form>

<?php
if (isset($_POST['marks'])) {
    $marks = $_POST['marks'];

    if ($marks > 800 && $marks <= 1000) {
        echo "Class I";
    }
    elseif ($marks > 600 && $marks <= 800) {
        echo "Class II";
    }
    elseif ($marks > 400 && $marks <= 600) {
        echo "Class III";
    }
    else {
        echo "Fail";
    }
}
?>

</body>
</html>