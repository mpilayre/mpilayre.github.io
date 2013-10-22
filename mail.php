<?php
if(isset($_POST['submit'])) {
	
   $to = 'mpilayre@gmail.com' ;     
   $subject = 'You have message from Portfolio Site';   //set the subject of email.
   $name = $_POST['contactname'];
   $email = $_POST['contactemail'];
   $msg = $_POST['contactmsg'];

   $headers = "From: ".$name." <".$email.">\n";
   $headers  .= 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message =  "Message: ".$msg;
   
   $error = array("name", "email", "message");
   
   if(!isset($_POST['name']))
   {
   		$error["name"] = 'Please enter name';
   }
   
   	if((count($error)) == 0)
	{		   
   		mail($to, $subject, $message, $headers);
		header('Location: index.php');
	}
	
   
}
?>