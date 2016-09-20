<?
$name=(isset($_REQUEST['name']))?$_REQUEST['name']:"";
$email=(isset($_REQUEST['email']))?$_REQUEST['email']:"";
$message=(isset($_REQUEST['message']))?$_REQUEST['message']:"";

// --------------------------------------
//   BEGIN EDITABLE AREA
// --------------------------------------

$to="cwinke@mmiemail.com"; 
// This is the recipient's email address, where the user's message will be sent.

$redir="thankyou.php"; 
// This is the page the user is redirected to upon submitting the form.

// --------------------------------------
//   END EDITABLE AREA
// --------------------------------------

// Below is the subject and body of the comment e-mail the recipient will receive:

$from="From: $email";
$subject="Online Message from ".$fname." ".$lname;
$body="Greetings,\n\nHere are the details from an online message submission:\n\n";
$body.="Name: ".$fname."\n";
$body.="E-mail Address: ".$email."\n\n";
$body.="Message:\n\n".$message."\n";

$body = wordwrap($body, 70);
mail($to, $subject, $body, $from);
header( "Location: $redir");
?>
