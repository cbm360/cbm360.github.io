<?php
// use actual sendgrid username and password in this section
$url = 'https://api.sendgrid.com/';
$user = 'azure_f69adc06de05de0a4e0f8755e7815b3a@azure.com'; // place SG username here
$pass = 'TjsFy6KX00RvrSq'; // place SG password here

// grabs HTML form's post data; if you customize the form.html parameters then you will need to reference their new new names here
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// note the above parameters now referenced in the 'subject', 'html', and 'text' sections
// make the to email be your own address or where ever you would like the contact form info sent
$params = array(
    'api_user'  => "$user",
    'api_key'   => "$pass",
    'to'        => "camronbmoore@gmail.com", // set TO address to have the contact form's email content sent to
    'subject'   => "Website Contact Form:  $name", // Either give a subject for each submission, or set to $subject
    'html'      => "<html><head><title> Contact Form</title><body>
    Name: $name\n<br>
    Email: $email\n<br>
    Subject: $subject\n<br>
    Message: $message <body></title></head></html>", // Set HTML here.  Will still need to make sure to reference post data names
    'text'      => "
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    $message",
    'from'      => "noreply@camronmoore.com", // set from address here, it can really be anything
  );


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// Redirect to thank you page upon successfull completion, will want to build one if you don't alreday have one available
//header('Location: thanks.html'); // feel free to use whatever title you wish for thank you landing page, but will need to reference that file name in place of the present 'thanks.html'
exit();

// print everything out
print_r($response);

?>