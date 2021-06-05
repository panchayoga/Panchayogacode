<?php

/* Configuration */
$subject = 'Panchayoga contact form email'; // Set email subject line here
$mailto  = ' info@panchayoga.com'; // Email address to send the form to
/* END Configuration */

$name     	= $_POST['name'];
$email          = $_POST['email'];
$phone          = $_POST['phone'];
$comments       = $_POST['comments'];
$timestamp 	= date("F jS Y, h:iA.", time());

// HTML for email to send submission details
$body = "
<br>
<p>Message:</p>
<p><b>Name</b>: $name <br>
<b>Email</b>: $email<br>
<b>Phone number</b>: $phone </p>
<p>This form was submitted on <b>$timestamp</b></p>
";

// Success Message
$success = "
<div class=\"row\">
    <div class=\"thankyou\">
        <h3>Submission successful</h3>
        <p>Thank you for reaching out. Our team will respond to you soon.</p>
    </div>
</div>
";

$headers = "From: $name <$email> \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = "<html><body>$body</body></html>";

if (mail($mailto, $subject, $message, $headers)) {
    echo "$success"; // success
} else {
    echo 'Form submission failed. Please try again...'; // failure
}
require_once "contactus.php";
?>
