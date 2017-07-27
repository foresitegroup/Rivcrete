<?php
session_start();

$salt = "RivcreteContactForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST['contact'] != "" &&
      $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    // Send email
    $Subject = "Contact From Website";
    $SendTo = "nrivecca@rivcrete.com";
    $Headers = "From: Contact Form <contactform@rivcrete.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    if ($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= "Best form of contact: " . $_POST['contact'] . "\n";

    $Message .= "\n";

    $Message .= "Message:\n" . $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "Thank you for your interest in Riv/Crete. You will be contacted soon.";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#contact-form");
}
?>