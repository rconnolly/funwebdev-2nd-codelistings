<?php while ( have_posts() ) : the_post(); ?>
  <div class="title">
<a href=' <?php the_permalink();?> '> <?php the_title(); ?> </a>
</div>
<?php
global $post; //access the custom meta fields
$custom = get_post_custom($post->ID);
$author = $custom['textbook_author'][0]; //authors
$pubdate = $custom['textbook_date'][0]; //date
  ?>
  <div class='author'>
     By: <?php echo $author." (".$pubdate.")"; ?>
  </div>
<?php endwhile; /* end of the loop.*/ ?>
<div class="nav-previous"><?php next_posts_link("Older Books"); ?> </div>
<div class="nav-next"><?php previous_posts_link("Newer Books"); ?></div>