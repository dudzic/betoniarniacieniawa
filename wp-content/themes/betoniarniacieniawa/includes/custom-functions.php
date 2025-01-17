<?php

function pagination(){
  global $wp_query;
  $big = 999999999;
  $max_page = $wp_query->max_num_pages;
  $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

 if ($page != 1)
      echo '<a href='.get_pagenum_link(1).' class="pagination-item pagination-item--bg"><<</a>';

  echo paginate_links(
              
      array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big ))),
          'format' => '?page=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          'mid_size' => 1,
          'prev_text' => __('<'),
          'next_text' => __('>'),
          'before_page_number'=> '<span class="pagination-item">',
          'after_page_number'=> '</span>',
      )
  );

  if ($page < $max_page)
  echo '<a href='.get_pagenum_link($max_page).' class="pagination-item pagination-item--bg">>></a>';

}
add_action('init', 'pagination');

//Options Page
if(function_exists('acf_add_options_page')) 
{
	// acf_add_options_page();
// 	acf_add_options_sub_page('Stopka');
// 	acf_add_options_sub_page('Social media');
// 	acf_add_options_sub_page('Dane-pasek górny');
}