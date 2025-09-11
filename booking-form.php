<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your email where you want to receive booking details
    $to = "jyotihospitalityminds@gmail.com";  

    // Collect form data
    $checkin  = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms    = $_POST['rooms'];
    $adults   = $_POST['adults'];
    $children = $_POST['children'];

    // Subject & message
    $subject = "New Booking Request - Hotel Crystal Palace";
    $message = "
    You have received a new booking request:

    Check-in Date: $checkin
    Check-out Date: $checkout
    Rooms: $rooms
    Adults: $adults
    Children: $children
    ";

    // Headers
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: noreply@yourdomain.com\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your booking request has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
