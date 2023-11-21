<?php 
if(isset($_POST['submit'])){
    $to = "jessa.mcfadden@yahoo.com";
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];
    $subject = "New Form Submission";
    $message = $fname . " " . $lname . " wrote the following: " . "\n\n" . $inquiry . "You can reach them at " . $phone . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: thankyou.html');
    }
?>