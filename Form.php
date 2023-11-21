<?php
 $name = $_POST[''];
$visitor_email = $_POST[''];
$service =$_POST[''];
$message = $_POST[''];
$email_from ="abhayshani@gmail.com";
$email_subject ='New Form Submission';
$email_body = "User Name : $name .\n".
             "User Email: $visitor_email.\n".
             "Subject:$subject.\n".

             "User Message: $message .\n";
             $to = 'abhayshani2003@gmail.com';
             $headers ="Form: $email_form\r\n";
             $headers.="Reply-to: $visitor_email\r\n";
             mail($to,$email_subject,$email_body,$headers);
             header("Location: contact.html");
?>
