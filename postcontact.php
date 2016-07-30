<?php
  if(isset($_POST['send'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $email_to="manali@techmatesofttech.com"; //website's owner mail
    $email_subject="Inquiry from website - (" . $fname .")";
    $email_subject_cc="Thank You" .  $fname . "for contacting us.";

      function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($fname)."<br/>";
    $email_message .= "Last Name: ".clean_string($lname)."<br/>";
    $email_message .= "Email: ".clean_string($email)."<br/>";
    $email_message .= "Message: ".clean_string($msg)."<br/>";

    $email_reply = "Hi " .$fname. ",<br/>Thanks for contacting us. We will review your email & get back to you shortly. ";

    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $userheaders = "From: manali@techmatesofttech.com\n";
    $userheaders .= "MIME-Version: 1.0\r\n";
    $userheaders .= "Content-Type: text/html; charset=utf-8\r\n";


    @mail($email_to, $email_subject, $email_message, $headers); // mail to website's owner
  
    @mail($email, $email_subject_cc, $email_reply, $userheaders); // mail to client(who had fill the contact-form in website)

    header('Location: contact.php');
  }
?>