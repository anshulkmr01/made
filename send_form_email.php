<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'anshulkmr01@gmail.com'; 
    $EmailSubject = 'Query From Website'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	
	$fullname = $_POST["firstname"]." ".$_POST["lastname"];;
	
	$lastPageValue= $_POST["lastPageValue"];
	
	$Name = $fullname;
    $MESSAGE_BODY = "Name: ".$fullname."<br>"; 
    $MESSAGE_BODY .="Number: ".$_POST["number"]."<br>"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
}
header('location:'.$lastPageValue.'?Name='.$Name.'');
?> 