<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <?php pageBanner(array(
      'title' => get_the_title(),
      'subtitle' => get_field('page_banner_subtitle'),
      // 'photo' => 'https://images.unsplash.com/photo-1510440777527-38815cfc6cc2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=06326529ec9d1ca2c6b2e8725026f699&auto=format&fit=crop&w=890&q=80',
    )); ?>


  

    <div class="container container--narrow page-section">
    
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
      <?php }
    ?>

    
    
    <?php 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php } ?>
    

    <div class="generic-content">
      <?php the_content(); 

      ?>
    </div>


  </div>
    
  <?php }

  get_footer();

?>