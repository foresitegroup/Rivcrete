<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    
    <title>RIV/CRETE<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Squada+One">
    <link rel="stylesheet" href="inc/icons.css?<?php echo filemtime('inc/icons.css'); ?>">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        jQuery("#header").waypoint(function(direction) {
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
        <a href="." id="logo"><img src="images/logo.png" alt="RIV/CRETE"></a>
        
        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <ul id="menu">
          <li><a href="#">Products &amp; Services</a></li>
          <li><a href="#">Company</a></li>
          <li><a href="#">Contact</a></li>
          <li id="phone">(414) 455-6070</li>
        </ul>
      </div>
    </div>

    <div id="home-banner" style="background-image: url(images/banner-home.jpg);"></div>

    <div class="site-width">
      <h1>Content (H1)</h1>
      
      Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
      <br>
      
      Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
      <br>
      
      Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.

      <div style="height: 2000px; width: 5px; margin: 0 auto; background: #FDC116;"></div>
    </div>
    
  </body>
</html>