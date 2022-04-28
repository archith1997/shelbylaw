<?php 
if(isset($_POST['submit'])){
    $to = $_POST['temail']; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $subject = "Contact Enquire";
    $subject2 = "Copy of your Contact submission";
    $message = " Name: " . $fname . "\r" . "Message :  ". $message   ;
    $message2 = "This is to inform that , We received your message " . $fname ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>