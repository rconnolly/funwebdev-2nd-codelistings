function textbook_admin_init() {
  add_meta_box(
	       'textbook_details', // $id
	       'Textbook Details', // $title
	       'textbook_callback', // $callback
	       'textbook', // $post_type
	       'normal', // $context
	       'high' // $priority
	       );
  function textbook_callback() {
    global $post;
    $custom = get_post_custom($post->ID);
    $publisher = $custom['textbook_pub'][0]; // publisher
    $author = $custom['textbook_author'][0]; // authors
    $pub_date = $custom['textbook_date'][0]; //date
?>
Please enter the required details for a textbook here.
<div class="wrap">
<p><label>Publisher:</label><br />
<input name="textbook_pub" value="<?php echo $publisher; ?>" /></p>
<p><label>Author(s):</label><br />
<input name="textbook_author" value="<?php echo $author; ?>" /></p>
<p><label>Date:</label><br />
<input name="textbook_date" type="date" value="<?php echo $pub_date; ?>" /></p>
</div>
<?php
 }
}

// add function to put boxes on the 'edit textbook post' page
add_action( 'admin_init', 'textbook_admin_init' );