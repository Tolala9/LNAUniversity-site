<?php 
get_header(); ?> 

<?php pageBanner(array(
  'title' => 'All faculties',
  'subtitle' => 'There is something for everyone. Heve a look around.',
  'photo' =>  get_theme_file_uri('images/programs.jpg')
 )); ?>




<div class="container container--narrow page-section">

  <ul class="link-list-program min-list">
  	<?php 



  	
  	while (have_posts()) {
  		the_post(); ?>

  		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  		

  		<?php } 

// pagination
  		echo paginate_links();

  		?>
    </ul>

    
  </div>


  


  <?php get_footer();

  ?>