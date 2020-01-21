    <div id="testimonials">
      <div class="cycle-slideshow site-width" data-cycle-slides="> div" data-cycle-auto-height="container" data-cycle-timeout="7000" data-cycle-speed="1000" data-cycle-pager="#t-pager" data-cycle-pager-template="<a href=#></a>">
        <div>
          &ldquo;The credit is due to the Riv-Crete team for supplying in spec material on a timely basis all night even as ice rates were modified throughout the pour to keep temps where they needed to be. WisDOT IA rep who was on site commented that he had seen less than a dozen deck pours of that size have in spec material the entire pour.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Philip Meinholz, P.E. Structural Engineer</div>
        </div>
        <div>
          &ldquo;A company that knows its customers as well as it knows the products that it sells.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Gary Wallis, St. Mary's Cement</div>
        </div>
        <div>
          &ldquo;Riv/Crete Ready Mix is a valued producer member of the Wisconsin Ready Mixed Concrete Association (WRMCA). Nicholas Rivecca is a respected past president of the WRMCA.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Cherish Schween, Executive Director of WRMCA</div>
        </div>
        <div>
          &ldquo;Riv/Crete Ready Mix brings to the concrete industry an extremely knowledgeable staff of concrete experts.  Using state of the art concrete plants and admixtures, Riv/Crete Ready Mix has the ability to produce some of the most technical and advanced concrete in the marketplace.&rdquo;
          <div class="attr"><span class="yellowtext">/</span> Paul Piekarski, Sales Rep. Sika Corporation</div>
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
      <div style="background-image: url(<?php echo $TopDir; ?>images/<?php echo $FooterImage; ?>footer3.jpg);"></div>
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

        <div id="copyright">&copy; <?php echo date("Y"); ?> Riv/Crete</div>
      </div>
    </div>

    <?php if ($TopDir != "") wp_footer(); ?>
  </body>
</html>