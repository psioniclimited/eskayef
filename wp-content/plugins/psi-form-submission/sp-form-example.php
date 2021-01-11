<?php
/*
Plugin Name: Eskayef Contact Form Plugin
Plugin URI: http://psionic.io
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Khaled Hasan
Author URI: http://psionic.io
*/

function html_form_code()
{
    echo '<form  class="nobottommargin" id="template-contactform" name="template-contactform" action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';

    echo '<div class="col_half">';
    echo '<label for="template-contactform-name">Name <small>*</small></label>';
    echo '<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" required/>';
    echo '</div>';

    echo '<div class="col_half col_last">';
    echo '<label for="template-contactform-email">Email <small>*</small></label>';
    echo '<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" required/>';
    echo '</div>';

    echo '<div class="clear"></div>';

    echo '<div class="col_half">';
    echo '<label for="template-contactform-phone">Phone</label>';
    echo '<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />';
    echo '</div>';

    echo '<div class="col_half col_last">';
    echo '<label for="template-contactform-subject">Subject <small>*</small></label>';
    echo '<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" required/>';
    echo '</div>';

    echo '<div class="clear"></div>';

    echo '<div class="col_full">';

    echo '<label for="template-contactform-message">Message <small>*</small></label>';
    echo '<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30" required></textarea>';
    echo '</div>';

    echo '<div class="col_full hidden">';
    echo '<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />';
    echo '</div>';

    echo '<div class="col_full eskayef-contact-button-col">';
    echo '<button class="custom-skf-globe-btn" value="contactform">Send Message</button>';
    echo '</div>';

    echo '</form>';
}

?>
<?php
function deliver_mail()
{
    if(isset($_POST['template-contactform-name']) &&
        isset($_POST['template-contactform-email']) &&
        isset($_POST['template-contactform-subject']) &&
        isset($_POST['template-contactform-message']))
    {
        $to = "khaledoffice301@gmail.com";
//    $subject = "This is subject";

        $name = $_POST['template-contactform-name']; // required
        $email_from = $_POST['template-contactform-email']; // required
        $telephone = $_POST['template-contactform-phone']; // not required
        $subject = $_POST['template-contactform-subject']; // required
        $message = $_POST['template-contactform-message']; // required

        $email_message = "Form details below.\n\n";

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:", "href");
            return str_replace($bad, "", $string);
        }


        $email_message .= "Name: " . clean_string($name) . "\n";
        $email_message .= "Email: " . clean_string($email_from) . "\n";
        $email_message .= "Phone: " . clean_string($telephone) . "\n";
        $email_message .= "Subject: " . clean_string($subject) . "\n";
        $email_message .= "Message: " . clean_string($message) . "\n";

// create email headers
        $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $success = wp_mail($to, $subject, $email_message, $headers);


        if ($success == true) {
//        echo "Message sent successfully...";
            wp_safe_redirect('/eskayef/success-submission-message/');
            exit;

        } else {
//        echo "Message could not be sent...";
            wp_safe_redirect('/eskayef/failure-submission-message/');
            exit;
        }
    } else {
                echo "Message could not be sent. Please check the inputs";
    }
}
?>
<?php

function cf_shortcode()
{
    ob_start();
    deliver_mail();
    html_form_code();

    return ob_get_clean();
}

add_shortcode('sitepoint_contact_form', 'cf_shortcode');
?>