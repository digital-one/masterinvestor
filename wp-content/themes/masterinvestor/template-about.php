<?php /* Template Name: About */ ?> 
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">

<div class="row">
	<div class="small-12 large-8 xlarge-9 columns">
		<div class="inner-wrap">
			<section class="about">
		<?php the_content() ?>
</section>
<section class="contributors">
	<h2>Contributors</h2>
<div class="row">
<?php

function sort_users($a, $b){
  return ($a->cm_user_index < $b->cm_user_index) ? -1 : 1;
}


$args = array(
	'role'      => 'contributor',
	'exclude'	=> 7,
	'fields' => 'all_with_meta',
	//'meta_key' 	=> 'cm_user_index',
	//'orderby' 	=> 'meta_value',
	//'order' 	=> 'ASC'
 ); 

if($users = get_users($args)):
	usort($users, "sort_users");
	foreach($users as $user):
		$fname = get_the_author_meta( 'first_name',$user->ID);
		$lname = get_the_author_meta( 'last_name',$user->ID);
		$image_id = get_the_author_meta( 'user_profile_image',$user->ID);
		$job = get_the_author_meta( 'cm_user_job_title',$user->ID);
		$profile = get_the_author_meta( 'cm_user_profile',$user->ID);
		if($image_id):
	list($avatar,$w,$h) = wp_get_attachment_image_src($image_id,'profile_image');
else:
	$avatar = get_template_directory_uri().'/images/avatar.png';
endif;
 ?>
<article class="small-12 xlarge-6 columns">
	<h3><a href="<?php echo get_author_posts_url( $user->ID ) ?>"><?php echo $fname.' '.$lname ?><?php if(!empty($job)):?> - <?php echo $job ?><?php endif ?></a></h3>
	<div class="row">
		<div class="small-3 medium-2 xlarge-3 columns"><figure><a href="<?php echo get_author_posts_url( $user->ID ) ?>"><img src="<?php echo $avatar ?>" /></a></figure></div>
		<div class="small-9 medium-10 xlarge-9 columns"><p><?php echo $profile ?> </p>
</div>
</div>
</article>
<?php endforeach ?>
<?php endif ?>
	</section>
</div>
	</div>
<?php get_sidebar('contact') ?>
</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>