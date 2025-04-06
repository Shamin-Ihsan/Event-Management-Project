<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $venue_id = $_POST["venue_id"];
    $customer_id = 1; // Example customer ID (replace with session-based login)
    $date = $_POST["booking_date"];
    $time = $_POST["booking_time"];

    // Get price of venue
    $venue_query = "SELECT price FROM venues WHERE id='$venue_id'";
    $result = mysqli_query($conn, $venue_query);
    $venue = mysqli_fetch_assoc($result);
    
    $advance = $venue['price'] * 0.10; // 10% advance payment

    $sql = "INSERT INTO bookings (venue_id, customer_id, booking_date, booking_time, advance_paid, status) 
            VALUES ('$venue_id', '$customer_id', '$date', '$time', '$advance', 'confirmed')";

    if (mysqli_query($conn, $sql)) {
        echo "Booking confirmed!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
