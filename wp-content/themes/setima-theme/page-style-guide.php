<?php


$args = [
    'wfPage' => '657c4a92c364e232beb357e3',
    'body' => '',
    'head' => 'head/page-style-guide',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('page-style-guide');
}
     
get_header('', $args);

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    udesly_get_content_template( 'page-style-guide' );
endwhile;
// End of the loop.

$args = [
  'footer' => 'footer/401',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('page-style-guide');
}

get_footer('', $args);
