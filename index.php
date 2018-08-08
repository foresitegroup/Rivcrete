<?php
$FooterImage = "home-";
include "header.php";
?>

<div id="home-banner" style="background-image: url(images/banner-home.jpg);">
  <div class="site-width">
    <div class="left">
      <h1>Ready Mix Concrete Decorative Building Products</h1>

      / READY WHEN YOU ARE<br>

      <a href="contact.php">ORDER CONCRETE</a>
    </div>
  </div>
</div>

<div id="home-about">
  <div class="site-width">
    <div class="text">
      Riv/Crete is a family owned company in the Milwaukee area that delivers concrete at the highest levels of quality and standards.<br>

      <a href="company.php">LEARN MORE</a>
    </div>

    <div class="image"></div>
  </div>
</div>

<div class="site-width home-products">
  <div class="slides">
    RIV/CRETE SPECIALIZES IN:

    <div class="cycle-slideshow" data-cycle-pager="#p-pager" data-cycle-pager-template="<a href=#>0{{slideNum}}</a>">
      <img src="images/home-slider7.jpg" alt="">
      <img src="images/home-slider6.jpg" alt="">
      <img src="images/home-slider1.jpg" alt="">
      <img src="images/home-slider2.jpg" alt="">
      <img src="images/home-slider3.jpg" alt="">
      <img src="images/home-slider4.jpg" alt="">
      <img src="images/home-slider5.jpg" alt="">

      <span id="p-pager"></span>
    </div>
  </div>

  <div class="text">
    <span class="yellowtext">/</span> COMMERCIAL<br>
    <span class="yellowtext">/</span> INDUSTRIAL<br>
    <span class="yellowtext">/</span> PRIVATE<br>
    <span class="yellowtext">/</span> RESIDENTIAL<br>

    <a href="products-and-services.php">PRODUCTS &amp; SERVICES</a>
  </div>
</div>

<?php include "footer.php"; ?>