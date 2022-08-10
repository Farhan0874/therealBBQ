<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$order = $_POST['order'];
$to = "farhanali0874@gmail.com";
$subject = "Mail From Realbbq";
$txt = "name = ". $name . "\r\n email = " . $email . "\r\n number =" . $number . "\r\n order = " . $order;
$headers = "From: noreply@realbbq.com" . "\r\n" .
"CC: anyone@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thanks.html");
?>