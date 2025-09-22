<?php
// Replace with your email
$to = "techvenky9390@gmail.com";
$subject = "New Venkat Travels Booking";

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$pickup = htmlspecialchars($_POST['pickup']);
$drop = htmlspecialchars($_POST['drop']);
$datetime = htmlspecialchars($_POST['datetime']);

$message = "Name: $name\nPhone: $phone\nPickup: $pickup\nDrop: $drop\nTime: $datetime";

$headers = "From: noreply@yourdomain.com";

if(mail($to, $subject, $message, $headers)){
    echo "Booking successful! We will contact you shortly.";
} else {
    echo "Unable to send email. Please try later.";
}
?>
