<?php 
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';	
	foreach ($_POST as $param_name => $param_val) {
    			$message .= "<tr><td><strong>". $param_name .":</strong> </td><td> " . $param_val ."</td></tr>";
    		}  ;
$message .= "</table>";
$message .= "</body></html>";

$headers = "From: website@webcreationcentre.com.au\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  //send email
  $email = $_REQUEST['email'] ;
  $subject = "small step contact" ;
  $sent = mail("mitchell.bray@gmail.com", $subject, $message, $headers);

if ($sent) {
	  notify::add('Thank you for your enquiry through our website.');
      header("location: ".$_SERVER['HTTP_REFERER']);
      exit();
    } else {
 	  notify::add('Sorry there was an error please email us directly', 'alert');
	  header("location: ".$_SERVER['HTTP_REFERER']);
      exit();
    }
