<?php 
 get_header(); ?> 

 <?php pageBanner(array(
  'title' => 'All events',
  'subtitle' => 'See what is going on in our world.',
  'photo' =>  get_theme_file_uri('images/events-banner.jpg')
 )); ?>


  <div class="container container--narrow page-section">
  	<?php 



  	
  	while (have_posts()) {
  		the_post(); 

  		get_template_part('template-parts/content', 'event');
  		

  		 } 

// pagination
  		echo paginate_links();

  		?>
      <hr class="section-break">
      <p>Looking for recap of past events? <a href="<?php echo site_url('/past-events') ?>">Check out our past events archive.</a></p>
  	</div>


	


 <?php get_footer();

 ?>