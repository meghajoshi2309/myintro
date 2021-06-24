<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

    $email_form='EasyTutorials@avinashk.com';
    $email_subject="New Form Submission";
    $email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."User Messaage: $message.\n";

    $to = "meghajoshi556@gmail.com";
    $headers = "Form: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\t";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index_contactme.html");
?>

