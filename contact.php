<?php

$fname = $_POST['first_name'];
$laname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$to_email = "prathameshadate9@gmail.com";
$subject = "Message from $fname $laname";
$body = "Phone :$phone  Email :$email  Message :$msg";
$headers = "From: karmveerbhauraopatil123@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {

	header('Location: contact.html');

	echo '<script>alert("We get your response..")</script>';

} else {
    echo '<script>alert("Something get wrong try again..!!")</script>';
}
?> 