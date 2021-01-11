<?php
if(isset($_POST['template-contactform-email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
     $email_to = "khaled@psionic.io";
//    $email_to = "eskayefoncology@gmail.com";
//     $email_subject = "Website Query";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['template-contactform-name'])||
        !isset($_POST['template-contactform-email'])||
        !isset($_POST['template-contactform-phone'])||
        !isset($_POST['template-contactform-subject'])||
        !isset($_POST['template-contactform-message']))
    {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }



    $name = $_POST['template-contactform-name']; // required
    $email_from = $_POST['template-contactform-email']; // required
    $telephone = $_POST['template-contactform-phone']; // not required
    $subject = $_POST['template-contactform-subject']; // required
    $message = $_POST['template-contactform-message']; // required

    $email_subject = $subject;

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($telephone)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <!-- include your own success html here -->

    Thank you for contacting us. We will be in touch with you very soon.
    <?php

}
?>