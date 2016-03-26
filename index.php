<?php get_header(); ?>
<!-- Main Area -->

<div id="content" class="group">
  <div id="main" class="group">
    <div id="blog" class="left-col">
    <?php 
	if ( have_posts() ){
	  while( have_posts() ) {
			the_post(); ?>
      <div class="post">
        <h2><?php the_title(); ?></h2>
        <?php /*?><div class="byline">by <a href="#">HAROLD OVERMAN</a> on <a href="#">THURSDAY, JANUARY 12, 2012</a></div><?php */?>
        <?php the_content(); ?>
      </div>
	  <?php }
	} ?>


    

      
      <div class="navi">
        <div class="right"> <a href="#">Previous</a> / <a href="#">Next</a> </div>
        <ul class="pages">
          <li>Page</li>
          <li><a href="#">1</a></li>
          <li>2</li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
        </ul>
      </div>
    </div>
    <!-- Sidebar Area -->
    <?php get_sidebar(); ?>
    <!-- End Sidebar Area --> 
  </div>
</div>
<!-- End Main Area -->
<?php get_footer(); ?>
