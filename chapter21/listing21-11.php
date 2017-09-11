function  custom_posts_per_page($query)
{
  if ( $query->query_vars['post_type'] =='textbook')
     $query->query_vars['posts_per_page'] = 20;
  return $query;
}
add_filter( 'pre_get_posts',  'custom_posts_per_page' );
