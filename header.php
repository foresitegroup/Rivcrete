<?php
function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}

$FooterImage = (isset($FooterImage)) ? $FooterImage : "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Riv/Crete<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Squada+One">
    <link rel="stylesheet" href="inc/icons.css?<?php echo filemtime('inc/icons.css'); ?>">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        jQuery("#header-spacer").waypoint(function(direction) {
          jQuery("#header").toggleClass("sticky", direction == "down");
          jQuery("#header > DIV").toggleClass("site-width", direction == "down");
        },{offset: -104});
      });
    </script>
  </head>
  <body>

    <div id="header-spacer"></div>
    <div id="header">
      <div>
        <a href="." id="logo"><img src="images/logo.png" alt="Riv/Crete"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div id="menu">
          <ul>
            <li><a href="products-and-services.php">Products &amp; Services</a></li>
            <li><a href="decorative-products.php">Decorative</a></li>
            <li><a href="company.php">Company</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="phone">(414) 455-6070</li>
          </ul>
        </div>
      </div>
    </div>
