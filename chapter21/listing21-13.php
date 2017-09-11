function textbook_content_display($content) {
  global $post;
  //check for the custom post type
  if (get_post_type() != "textbook") {
    return $content;
  }
  else {
    $custom = get_post_custom($post->ID);
    $newContent='<div class="title">'. get_the_title($post->ID).
      '</div>';
    $author = $custom['textbook_author'][0]; //authors
    $pubdate = $custom['textbook_date'][0]; //date
    $newContent .= '<div class="author"> By:' . $author; $newContent .= '(' . $pubdate . ')</div>';
    $newContent .= '<div class="content">' . $content . '</div>';
    return $newContent;
  }
}
add_filter('the_content','textbook_content_display');
