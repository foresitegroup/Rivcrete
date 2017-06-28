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

    <div id="home-banner" style="background-image: url(images/banner-home.jpg);">
      <div class="site-width">
        <div class="left">
          <h1>Readymix Concrete Decorative Building Products</h1>

          / READY WHEN YOU ARE<br>

          <a href="#">ORDER CONCRETE</a>
        </div>
      </div>
    </div>

    <div id="home-about">
      <div class="site-width">
        <div class="text">
          Rivcrete is a family owned company in the Milwaukee area that delivers concrete at the highest levels of quality and standards.<br>

          <a href="#">LEARN MORE</a>
        </div>

        <div class="image"></div>
      </div>
    </div>

    <div class="site-width home-products">
      <div class="slides">
        RIVCRETE SPECIALIZES IN:

        <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
        <div class="cycle-slideshow" data-cycle-pager="#p-pager" data-cycle-pager-template="<a href=#>0{{slideNum}}</a>">
          <img src="images/home-slider1.jpg" alt="">
          <img src="images/home-slider2.jpg" alt="">
          <img src="images/home-slider3.jpg" alt="">
          <img src="images/home-slider4.jpg" alt="">
          <img src="images/home-slider5.jpg" alt="">

          <div id="p-pager"></div>
        </div>
      </div>

      <div class="text">
        <span class="yellowtext">/</span> COMMERCIAL<br>
        <span class="yellowtext">/</span> INDUSTRIAL<br>
        <span class="yellowtext">/</span> PRIVATE<br>
        <span class="yellowtext">/</span> RESIDENTIAL<br>

        <a href="#">PRODUCTS &amp; SERVICES</a>
      </div>
    </div>

    <div id="home-testimonials">
      <div class="site-width">
        TESTIMONIALS
      </div>
    </div>

    <div id="home-order">
      ORDER CONCRETE
    </div>

    <div id="home-images">
      IMAGES
    </div>

    <div id="prefooter">
      PREFOOTER
    </div>

    <div id="footer">
      FOOTER
    </div>
  </body>
</html>