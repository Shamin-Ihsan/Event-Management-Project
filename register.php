<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $profile_type = $_POST["profile_type"];

    $sql = "INSERT INTO users (username, email, password, profile_type) VALUES ('$username', '$email', '$password', '$profile_type')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
