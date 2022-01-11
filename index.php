<?php
$FooterImage = "home-";
include "header.php";
?>

<div id="home-banner">
  <video playsinline autoplay muted loop poster="images/home-banner.jpg">
    <source src="images/home-banner.mp4" type="video/mp4">
  </video>

  <div class="site-width">
    <img src="images/logo-round.png" alt="" id="logo-round"><br>
    <br><br><br><br>

    <a href="contact.php">ORDER CONCRETE</a>
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
    <div class="cycle-slideshow" data-cycle-pager="#p-pager" data-cycle-pager-template="<a href=#>0{{slideNum}}</a>">
      <img src="images/home-slider-award2.png" alt="">
      <img src="images/home-slider7.jpg" alt="">
      <img src="images/home-slider6.jpg" alt="">
      <img src="images/home-slider1.jpg" alt="">
      <img src="images/home-slider-ascent.jpg" alt="">
      <img src="images/home-slider-837.jpg" alt="">
      <img src="images/home-slider4.jpg" alt="">
      <img src="images/home-slider-837b.jpg" alt="">

      <span id="p-pager"></span>
    </div>
  </div>

  <div class="text">
    LATEST RIVCRETE NEWS
    <?php
    require('blog/wp-load.php');
    query_posts('showposts=1');
    while (have_posts()): the_post();
    ?>
    <div class="blog-index-post">
      <?php
      echo '<h4 class="blog-index-date">'.get_the_date('n/j/y', get_the_ID()).'</h4>';
      the_title('<h3 class="blog-index-title">', '</h3>');
      echo fg_excerpt(34);
      echo '<a href="'.get_permalink().'" class="button">Read More</a>';
      ?>
    </div>
    <?php endwhile; ?>
    
    <br><br>

    <a href="blog" class="button">See All News Posts</a>
  </div>

  <div id="carboncure"><embed src="https://mycarboncureapi.com/widgets?widgetName=embeddedTicker&version=1&name=Rivcrete&id=2202&timeframe=All Time&units=Imperial&production=Volume&environmental=Forestland"/></div>
</div>

<?php include "footer.php"; ?>