<?php


$EmailFrom = "do_not_reply@helloplease.me";
$Subject = "HELLO MAIL";

$EmailTo .= "magda.wistuba@gmail.com";

$Name    = Trim(stripslashes($_POST['name'])); 
$Tel     = Trim(stripslashes($_POST['tel'])); 
$Email   = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "No Validation.";
  exit;
}

// prepare email body text
$Body = "A visitor to our website is writing to request more information about helloplease. This is an automated note from helloplease.me";
$Body .= "\n\n";
$Body .= "-----\n\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
if ($EmailTo != ""){
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

	// redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=../thanks.html\">";
	}
	else{
	  print "Error.";
	}

} else {
	print "No Email Specified.";
}


?>