<?php
session_start();

$salt = "RivcreteContactForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    // Add info to MailChimp
    if (isset($_POST['sendupdates'])) {
      include_once "inc/fintoozler.php";

      $name = explode(" ", $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])], 2);
      $lastname = (isset($name[1])) ? $name[1] : "";

      $phone = ($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "") ? $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] : "";

      $mcdata = array(
        'email'  => $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])],
        'status' => 'subscribed',
        'firstname' => $name[0],
        'lastname' => $lastname,
        'phone' => $phone
      );

      function syncMailchimp($mcdata) {
       $memberId = md5(strtolower($mcdata['email']));
        $dataCenter = substr(MAILCHIMP_API,strpos(MAILCHIMP_API,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . MAILCHIMP_LIST_ID . '/members/' . $memberId;

        $json = json_encode(array(
          'email_address' => $mcdata['email'],
          'status'        => $mcdata['status'],
          'merge_fields'  => [
            'FNAME' => $mcdata['firstname'],
            'LNAME' => $mcdata['lastname'],
            'PHONE' => $mcdata['phone']
          ]
        ));

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . MAILCHIMP_API);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode;
      }

      syncMailchimp($mcdata);
    }

    // Send email
    $Subject = "Contact From Website";
    $SendTo = "contactus@rivcrete.com";
    $Headers = "From: Contact Form <contactform@rivcrete.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    if ($_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "")
      $Message .= $_POST[md5('company' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    if (isset($_POST['contact'])) $Message .= "Best form of contact: " . $_POST['contact'] . "\n";

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

  if (empty($_REQUEST['src'])) {
    $_SESSION['feedback'] = $feedback;
    header("Location: " . $_POST['referrer'] . "#contact-form");
  }
}
?>