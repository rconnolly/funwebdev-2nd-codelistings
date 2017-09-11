<?php while ( have_posts() ) : the_post(); ?>
  <div class="title"> <?php the_title(); ?> </div>
  <?php
global $post;
$custom = get_post_custom($post->ID);
$author = $custom['textbook_author'][0]; //authors
$pubdate = $custom['textbook_date'][0]; //date
?>
  <div class='author'>
     By: <?php echo $author." (".$pubdate.")"; ?></div>
  <div class='content'>    <?php the_content(); ?> </div>
<?php endwhile; /* end of the loop.*/ ?>
<a href='<?php echo get_post_type_archive_link("textbook");?>'> Browse all Textbooks</a>
<?php
//navigation to newer/older posts
echo "Older Post: "; next_post_link();
echo "Newer Post: "; previous_post_link();
?>
