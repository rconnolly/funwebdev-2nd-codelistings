function textbook_save_data() {
  global $post;
   update_post_meta($post->ID, 'textbook_pub',
                    $_POST['textbook_pub']);
   update_post_meta($post->ID, 'textbook_author',
                    $_POST['textbook_author']);
   update_post_meta($post->ID, 'textbook_date',
                    $_POST['textbook_date']);
}

// attach your function
add_action('save_post',  'textbook_save_data');
