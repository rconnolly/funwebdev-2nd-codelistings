function textbook_widget_display($args) {
  echo $before_widget;
  echo $before_title . '<h2>Random Book</h2>' . $after_title;
  echo $after_widget;
  $args = array(
                'posts_per_page' => 1,
                'post_type' => array('textbook'),
                'orderby' => "rand"
                );
  $bookQuery = new WP_Query();
  $bookQuery->query($args);
  while ( $bookQuery->have_posts() ) : $bookQuery->the_post();
  the_content();
  endwhile;
}
// Register
wp_register_sidebar_widget( 'funwebdev_textbook_widget', // unique widget id
			    'Random Textbook', // widget name
			    'textbook_widget_display', // callback function
			    array( // options
			    'description' => 'Displays a random Textbook'
				   )
			    );
