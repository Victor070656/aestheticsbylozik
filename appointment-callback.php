<?php
session_start();
include_once("functions.php");

// var_dump($_SESSION["appointment"], $_SESSION["user"]);
// die();

if (!isset($_SESSION["user"])) {
    echo "<script>location.href='login.php'</script>";
} else {
    $userid = $_SESSION["user"]["userid"];
}

if (isset($_GET["trxref"])) {
    $ref = $_GET["txref"];
    $fname = $_SESSION["appointment"]["fname"];
    $lname = $_SESSION["appointment"]["lname"];
    $email = $_SESSION["appointment"]["email"];
    $phone = $_SESSION["appointment"]["phone"];
    $service = $_SESSION["appointment"]["service"];
    $location = $_SESSION["appointment"]["location"];
    $date = $_SESSION["appointment"]["date"];
    $time = $_SESSION["appointment"]["time"];
    $price = $_SESSION["appointment"]["price"];

    // Check if the transaction was successful
    if (confirmTransaction($ref)) {
        // Payment was successful, proceed with appointment booking
        $query = mysqli_query($conn, "INSERT INTO `appointments` (`userid`, `fname`, `lname`, `email`, `phone`, `service_id`, `location`, `date`, `time`, `price`) VALUES ('$userid', '$fname', '$lname', '$email', '$phone', '$service', '$location', '$date', '$time', '$price')");
        if ($query) {
            echo "<script>location.href='booking.php'; alert('Appointment booked successfully!')</script>";
        } else {
            echo "<script>location.href='booking.php'; alert('Appointment booking failed! contact support')</script>";
        }
    } else {
        echo "<script>location.href='booking.php'; alert('Appointment booking failed! contact support')</script>";
    }
} else {
    echo "<script>location.href='booking.php'; alert('Something went wrong!')</script>";
}
