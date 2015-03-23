<?php get_header() ?>

<section id="slider" class="slider-outer">
  <div id="slick" class="slick-slider">
	<!--<div class="slick-list">
		<div class="slick-track">-->

  <?php
if(get_field('slider',$post->ID)):
while(the_repeater_field('slider')): 
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'), 'slide');
       $link="";
       $is_brand = false;
       $is_offer = false;
       $class="";
       $sub_head = get_sub_field('slide_sub_heading');
       $button = get_sub_field('slide_button_label');
       switch(get_sub_field('slide_type')){
        case 'brand':
        $brand = get_sub_field('slide_brand');
        $is_brand = true;
       list($svg,$w,$h) = wp_get_attachment_image_src(get_field('brand_logo_svg',$brand->ID), 'full');
       list($png,$w,$h) = wp_get_attachment_image_src(get_field('brand_logo_png',$brand->ID), 'full');
       $class=  $h >= $w ? ' portrait' : '';
       $logo_src = !empty($svg) ? $svg : $png;
       $link = get_permalink($brand->ID);
        break;
        case 'page':
        $link = get_sub_field('slide_page');
        break;
        case 'offer':
        $is_offer = true; 
        break;
       }
?>    
<div class="slick-slide slide preload" style="background-image:url('<?php echo $src ?>');">
  <?php if(!empty($link)):?><a class="inner" href="<?php echo $link ?>"><?php else: ?><div class="inner"><?php endif ?>
  <?php if(!$is_offer):?>
  <div class="vcenter"><div class="caption"><?php if($is_brand):?><div class="logo<?php echo $class ?>"><img src="<?php echo $logo_src ?>" /></div><?php endif ?><h3><?php echo get_sub_field('slide_heading')?></h3><?php if(!empty($sub_head)):?><h4><?php echo $sub_head ?></h4><?php endif ?><?php if(!empty($button)):?><span class="button"><?php echo $button ?></span><?php endif?></div></div><?php endif ?>
  <?php if(!empty($link)):?></a><?php else: ?></div><?php endif ?></div>
<?php endwhile ?>
<?php endif ?>
<?php /*
<div class="slick-slide slide preload" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/marccain-slide.jpg');"><div class="vcenter"><div class="caption">Caption</div></div></div>
*/ ?>
<!--</div>
</div>-->
<?php /*
<div class="slick-dots-wrap">
	<div class="inner">
		<div>
    <ul class="slick-dots"><li class=""><button type="button" data-role="none">1</button></li><li class="slick-active"><button type="button" data-role="none">2</button></li><li class=""><button type="button" data-role="none">3</button></li><li class=""><button type="button" data-role="none">4</button></li><li class=""><button type="button" data-role="none">5</button></li><li class=""><button type="button" data-role="none">6</button></li><li class=""><button type="button" data-role="none">7</button></li></ul>
    </div>
</div>
</div>
*/ ?>
<!--</div>
</div>-->
</div>
</section>
<main id="main">
<div class="handle"><a>Scroll Down</a></div>
<section id="signposts">
<header><h2>SPRING/SUMMER 2015 COLLECTIONS IN STORE NOW</h2></header>
<div class="posts">

<?php
if(get_field('signposts',$post->ID)):
while(the_repeater_field('signposts',$post->ID)): 
  switch(get_sub_field('signpost_type')){
    case 'collection':
    $collection = get_sub_field('signpost_collection');
      list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($collection->ID), 'signpost');
      $brand = get_field('collection_brand',$collection->ID);
      $display_title = get_field('collection_displayed_title',$collection->ID);
      $title = !empty($display_title) ? $display_title : $collection->post_title;
      ?>
      <div class="signpost overlay"><a href="<?php echo get_permalink($collection->ID) ?>" title="<?php echo $collection->post_title ?>" class="content null"><figure><div class="bg" style="background-image:url(<?php echo $src ?>);"></div><figcaption><div><h3><?php echo $brand->post_title ?></h3><h4><?php echo $title ?></h4></div><footer><span class="button">View More</span></footer></figcaption></figure></a></div>
      <?php
    break;
    case 'brand':
      $brand = get_sub_field('signpost_brand');
       list($svg,$w,$h) = wp_get_attachment_image_src(get_field('brand_logo_svg',$brand->ID), 'full');
       list($png,$w,$h) = wp_get_attachment_image_src(get_field('brand_logo_png',$brand->ID), 'full');
       $class=  $h >= $w ? ' portrait' : '';
       $src = !empty($svg) ? $svg : $png;
    ?>
    <div class="signpost"><?php if(get_field('signpost_link',$brand->ID)==1): ?><a href="<?php echo get_permalink($brand->ID)?>" class="content"><?php else: ?><div class="content"><?php endif ?><div class="logo"><div class="img-wrap<?php echo $class ?>"><img src="<?php echo $src ?>" onerror="this.onerror=null; this.src='<?php echo $png ?>'" /></div></div><?php if(get_field('signpost_link',$brand->ID)==1): ?></a><?php else: ?></div><?php endif ?></div>
    <?php
    break;
    case 'tweet':
    $feed = get_sub_field('signpost_twitter_feed');
?>
<div class="signpost twitter">
  <div class="content">
    <div id="<?php echo $feed ?>" class="twitter-feed"></div>
      <footer><a href="https://twitter.com/giselle_york" target="_blank" class="button">Follow Us</a></footer>
  </div>

</div>
<?php
    break;
  }
  endwhile;
  endif;

?>
</div>

</section>
<section id="about" class="gutter">
	<div class="container">
<?php echo $post->post_content ?>
<div class="underline"><span></span></div>
<figure><img src="http://www.giselleladieswear.com/wp-content/uploads/2015/03/shop-front1.jpg" /></figure>
</div>
	</section>
	<?php get_template_part('newsletter'); ?>

</main>
<?php get_footer() ?>