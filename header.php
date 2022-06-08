<?php
if (!isset($TopDir)) $TopDir = "";

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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php if ($TopDir != "") wp_head(); ?>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Squada+One">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/icons.css?<?php if ($TopDir == "") echo filemtime('inc/icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http']").not("[href*='" + window.location.host + "']").prop('target','new');
        $("a[href*='.pdf']").prop('target', 'new');

        jQuery("#header-spacer").waypoint(function(direction) {
          jQuery("#header").toggleClass("sticky", direction == "down");
          jQuery("#header > DIV").toggleClass("site-width", direction == "down");
        },{offset: -104});
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics [This will stop working 7/1/23] -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156459379-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-156459379-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G1PR42FW2B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-G1PR42FW2B');
    </script>

  </head>
  <body <?php if ($TopDir != "") body_class(); ?>>

    <div id="header-spacer"></div>
    <div id="header">
      <div>
        <a href="<?php echo $TopDir; ?>." id="logo"><img src="<?php echo $TopDir; ?>images/logo.png" alt="Riv/Crete"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div id="menu">
          <ul>
            <li>
              <a href="<?php echo $TopDir; ?>products-and-services.php">Products</a>
              <ul>
                <li><a href="<?php echo $TopDir; ?>decorative-products.php">Decorative</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $TopDir; ?>portfolio.php">Portfolio</a></li>
            <li>
              <a href="<?php echo $TopDir; ?>company.php">Company</a>
              <ul>
                <li><a href="<?php echo $TopDir; ?>blog">News</a></li>
                <li><a href="<?php echo $TopDir; ?>environmental.php">Environmental</a></li>
                <li><a href="<?php echo $TopDir; ?>resources.php">Resources</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $TopDir; ?>employment.php">Employment</a></li>
            <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
            <li class="phone">(414) 455-6070</li>
          </ul>
        </div>
      </div>
    </div>
