<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST["booking_id"];

    $sql = "UPDATE bookings SET status='canceled' WHERE id='$booking_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Booking canceled!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
