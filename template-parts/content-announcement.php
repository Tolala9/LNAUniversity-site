<?php $slideText = get_field('slide_text'); ?>

<div class="hero-slider__slide" style="background-image: url(<?php the_post_thumbnail_url('announSlide'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
        <p class="t-center"><?php echo $slideText ?> </p>
        <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>