<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_input = $_POST["login_input"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$login_input' OR email='$login_input'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row["password"])) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}
?>
