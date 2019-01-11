<?php
if(lisset($_POST['submit']))
    if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL))
{
    echo "error; please submit the form!";
}
$datetime = date("Y-m-d H:i:s");
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//validation
if(empty($name)||empty($visitor_email))
{
    echo "Name and email is mandatory!";
    exit;
}
$email_from = 'admin@odalisgarcia502.com'
$email_subject ="Form Submitted";
$email_body = "New mail from  
     $name.\n".
                "email address: $visitor_email.\n".
               "User Message: \n $message";

$to ='admin@odalisgarcia502.com';

$header = "From: ".$ name . " $email " . "\r\n";
$header .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
 
        

header("Location: index.html");

?>