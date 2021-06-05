<?php
$errors = '';
$myemail = 'no-reply@panchayoga.com';//<-----Put Your email address here.


if(empty($_POST['fullName']) ||
    empty($_POST['emailId']))
{
    $errors .= "\n Error: all fields are required";
}

$fname = $_POST['fullName'];
$hearAboutUs = $_POST['hearAboutUs'];
$message = $_POST['message'];
$email_address = $_POST['emailId'];
$service = "Enquiry Form Details";
$user_ip = getenv('REMOTE_ADDR');

$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
$location = $city. ", ".$region.", ".$country;
if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
    $to = 'info@panchayoga.com, uday@adweta.com';

    $email_subject = " [PANCHA YOGA] : Enquiry from: Contact Us : $fname";
    $email_body = '<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
</head>
<body><table style="border: solid 1px #ddd;margin: 0 auto;width: 90%;"><tr><td colspan="2" style="border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center"><h3> 
 Contact Details:</h3></td></tr> 
        <tr ><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center">Full Name </td><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center">'. $fname .'</td></tr>
         <tr><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center"> How did you hear about us ? </td><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center">'.  $phone .'</td></tr>
          <tr><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center"> Email </td><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center">'.  $email_address .'</td></tr> 
            <tr><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center"> Enquiry from </td><td style="height:40px;border-bottom: 1px solid #dddddd;padding: 5px 10px; text-align: center"> '. $service .' </td></tr> 
           
             <tr><td style="height:40px;padding: 5px 10px; text-align: center"> User Location </td><td style="height:40px;padding: 5px 10px; text-align: center" >'.  $location .'</td></tr></table></body>
</html> ';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $email_address\n";
    $headers .= "Reply-To: $email_address";

    $send_mail = mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    //header('Location: contact-form-thank-you.html');
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'message' => 'Could not send mail! Please check your PHP mail configuration.', 'success' => false));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'message' => 'Hi '.$fname .' Thank you for your email', 'success' => true));
        die($output);
    }
}
?>