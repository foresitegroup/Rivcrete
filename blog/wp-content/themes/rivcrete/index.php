<?php
get_header();
// the_post();
?>

<div class="page-header noimage<?php if (is_single()) echo ' blog-single-header' ?>">
  <div class="site-width">
    <div class="text">
    	<?php if (!is_single()) { ?>
	      <h1>Riv/Crete Blog</h1>
	      Industry news and the inside scoop on Riv/Crete news.

	      <h2>READ ARTICLES</h2>
      <?php
      } else {
      	echo '<h2 class="blog-single-date">'.get_the_date('n/j/y', get_the_ID()).'</h2>';
      	the_title('<h1 class="blog-single-title">', '</h1>');
      }
      ?>
    </div>

    <div class="image"></div>
  </div>
</div>

<?php if (!is_single()) { ?>
  <div class="site-width blog-index">
    <div class="pagination">
	    <?php
	    $paginate_args = array('show_all' => true, 'prev_text' => '<', 'next_text' => '>');
	    echo paginate_links($paginate_args);
	    ?>
	  </div> <!-- /.pagination -->
    
    <div class="blog-index-posts">
			<?php
		  while ( have_posts() ) {
				the_post();
				?>

				<div class="blog-index-post">
					<?php
					echo '<h4 class="blog-index-date">'.get_the_date('n/j/y', get_the_ID()).'</h4>';
					the_title('<h3 class="blog-index-title">', '</h3>');
					echo fg_excerpt(34);
					echo '<a href="'.get_permalink().'" class="button">Read More</a>';
		      ?>
		    </div>
	    <?php } ?>
	  </div>

		<div class="pagination">
	    <?php echo paginate_links($paginate_args); ?>
	  </div> <!-- /.pagination -->
  </div>
<?php } else { ?>
	<div class="site-width blog-single-post">
		<div class="blog-single-sidebar">
			<?php
			the_post();
			if (has_post_thumbnail()) {
			?>
			  <div class="blog-single-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div>
			<?php
		  }

		  $recent = new WP_Query(array('post_type' => 'post', 'post__not_in' => array(get_the_ID()), 'posts_per_page' => 2));
      
      if($recent->have_posts()) :
        echo '<h3>Recent Blogs</h3>';
        while($recent->have_posts()) : $recent->the_post();
          echo '<a href="'.get_permalink().'">'.get_the_title()." &raquo;</a><br>\n";
        endwhile;
      endif;

      wp_reset_postdata();
		  ?>
		</div>

    <div class="blog-single-text">
      <?php the_content(); ?>
    </div>
	</div>
<?php
}

get_footer();
?>