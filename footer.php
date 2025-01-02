    <div id="testimonials">
      <div class="cycle-slideshow site-width" data-cycle-slides="> div" data-cycle-auto-height="container" data-cycle-timeout="7000" data-cycle-speed="1000" data-cycle-pager="#t-pager" data-cycle-pager-template="<a href=#></a>">
        <div>
          &ldquo;You guys were outstanding! Great concrete, great service, great communication.  We could not have asked for a better ready-mix company to work with.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Chuck Vitale, Owner of Vee Jay Construction</div>
        </div>
        <div>
          &ldquo;Congratulations you guys have done an incredible job of improving your company's safety programs your new MOD is really an impressive accomplishment.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Brad Hallmark, Vizance Insurance</div>
        </div>
        <div>
          &ldquo;In my opinion, I think concrete buildings are the best buildings in the world.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Rick Barrett, Developer of "The Couture"</div>
        </div>
        <div>
          &ldquo;I very much appreciated all the help your team gave me this past summer and wanted to let them know how awesome of a job they did with as much as I had going on.  We poured multiple times every day.   With all the projects going on we worked together and don't think I missed one deadline which is amazing.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Chris Zorzin, Findorff Superintendent</div>
        </div>
        <div>
          &ldquo;Thank you for all of the time you and your team took last week. We've toured a bunch of stuff this past semester, but touring Rivcrete was by far my favorite. It's companies like yours that help the CLC club succeed and make me excited to graduate college and start my career in the construction industry!&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Chandler Baures, Findorff P.M.</div>
        </div>
        <div>
          &ldquo;I'm not aware of any other company in the region that has gone to this extent to reduce their carbon impact more than Riv/Crete Ready Mix.  They are the clear-cut leaders in their industry.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Colton Flint, Command Alkon</div>
        </div>
        <div>
          &ldquo;I would like to thank you for hosting MSOE: ASCE, ITE, and Pavement Design course. Everyone was extremely happy with the tour, and I cannot thank you enough for the hospitality and kindness that all the tour guides displayed. It was such a pleasure to learn and meet you all and I appreciate the patience when answering all our questions. It was such a cool experience!&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Kris Banse, Past ASCE Student President</div>
        </div>
        <div>
          &ldquo;The credit is due to the Riv-Crete team for supplying in spec material on a timely basis all night even as ice rates were modified throughout the pour to keep temps where they needed to be. WisDOT IA rep who was on site commented that he had seen less than a dozen deck pours of that size have in spec material the entire pour.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Philip Meinholz, P.E. Structural Engineer</div>
        </div>
        <div>
          &ldquo;Riv/Crete Ready Mix is a valued producer member of the Wisconsin Ready Mixed Concrete Association (WRMCA). Nicholas Rivecca is a respected past president of the WRMCA.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Cherish Schween, Executive Director of WRMCA</div>
        </div>

        <span id="t-pager"></span>
      </div>
    </div>

    <?php if (!isset($PageTitle)) { ?>
    <div class="order-band">
      <h1>Hiring Now!</h1>
      <a href="<?php echo $TopDir; ?>employment.php">SEE OPEN POSITIONS</a>
    </div>
    <?php } ?>

    <?php if (!isset($FooterImages)) { ?>
    <div id="footer-images" class="cf">
      <div style="background-image: url(<?php echo $TopDir; ?>images/<?php echo $FooterImage; ?>footer1.jpg);"></div>
      <div style="background-image: url(<?php echo $TopDir; ?>images/<?php echo $FooterImage; ?>footer2.jpg);"></div>
      <div style="background-image: url(<?php echo $TopDir; ?>images/<?php echo $FooterImage; ?>footer3.webp);"></div>
    </div>
    <?php } ?>

    <div id="prefooter">
      <img src="<?php echo $TopDir; ?>images/apple-touch-icon.png" alt="">

      <ul id="footer-menu">
        <li><a href="<?php echo $TopDir; ?>products-and-services.php">Products</a></li>
        <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
        <li><a href="<?php echo $TopDir; ?>contact.php">Order Concrete</a></li>
        <li><a href="<?php echo $TopDir; ?>blog">News</a></li>
        <li><a href="<?php echo $TopDir; ?>employment.php">Employment</a></li>
      </ul>
    </div>

    <div id="footer">
      <div class="site-width">
        2761 S Chase Ave <span>&bull;</span> 12005 W Hampton Ave <span>&bull;</span> 4350 S 13th St <span>&bull;</span> (414) 455-6070

        <div id="copyright">
          &copy; <?php echo date("Y"); ?> Riv/Crete<br>
          <a href="https://foresitegrp.com" style="color: #808285;">WEBSITE BY FORESITE</a>
        </div>
      </div>
    </div>

    <?php if ($TopDir != "") wp_footer(); ?>
  </body>
</html>