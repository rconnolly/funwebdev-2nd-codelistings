<?php
/**
  * Template Name: Textbook Template
  * Description: Demonstration of a custom page template
*/
?>
<?php get_header(); ?>
<div id="primary" class="site-content">
   <div id="content" role="main">
   <?php while ( have_posts() ) : the_post(); ?>
     <div class="title"> <?php the_title(); ?></div>
     <div class='author'>
          This page by: <?php the_author_meta('display_name');?>
     </div>
     <div class='editor'>Last edited: <?php the_date(); ?> </div>
     <?php
     echo "<a href='". get_permalink($post->post_parent) . "'>" .get_the_title($post->post_parent) . "</a>";
     $current_user = wp_get_current_user();
     // is user an editor
     if ($current_user->has_cap('edit_post')) {
     ?>
          <div class="admin">
             PageID: <?php the_ID();
             echo " Page Type: ".get_post_type()." ";
             edit_post_link("Edit this page"); ?>
             <div class='floater'>
                 <?php
                 echo 'Username: ' . $current_user->user_login
                      . '<br />';
                 echo 'First Name:' . $current_user->user_firstname
                      . '<br />';
                 echo 'Last Name: ' . $current_user->user_lastname
                      . '<br />';
                 echo 'User ID: ' . $current_user->ID . '<br />';
                 ?>
             </div> <!-- .floater -->
	   </div> <!-- .admin -->
         <?php
         } // end if
         ?>
         <div class='content'> <?php the_content(); ?> </div>
         <div class='tags'>
           <hr/> <?php wp_tag_cloud(); ?>
	 </div> <!-- .tags -->
     <?php endwhile; /* end of the loop.*/ ?>
   </div> <!-- #content -->
 </div> <!-- #primary -->
<?php get_footer(); ?>
