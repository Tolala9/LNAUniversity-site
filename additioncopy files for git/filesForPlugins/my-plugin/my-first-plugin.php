<?php 

/*
Plugin Name: My First Plugin
Description: Just first plugin
*/

// add_filter('the_content', 'contentEdits');

// function contentEdits($content) {

// 	$content =  $content . '<p> All content belongs to University </p>';
// 	$content = str_replace('Lorem', '******', $content);
// 	return $content;
// }

add_shortcode('programCount', 'programCountFunction');

function programCountFunction() {

	 $prog = new WP_Query(array( 'post_type' => 'program' ));
	 $count_posts = wp_count_posts('program')->publish; 

	return $count_posts;
}

add_shortcode('professorsCount', 'professorCountFunction');

function professorCountFunction() {

	 $prog = new WP_Query(array( 'post_type' => 'professor' ));
	 $count_posts = wp_count_posts('professor')->publish; 

	return $count_posts;
}

add_shortcode('likeCount', 'likeCountFunction');

function likeCountFunction() {

	 $prog = new WP_Query(array( 'post_type' => 'like' ));
	 $count_posts = wp_count_posts('like')->publish; 

	return $count_posts;
}

