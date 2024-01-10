<?php


$args = [
    'wfPage' => '657c4a92c364e232beb357e2',
    'body' => '',
    'head' => 'head/404',
];   

if (function_exists('udesly_set_frontend_editor_data')) {
    udesly_set_frontend_editor_data('404');
}
     
get_header('', $args);

udesly_get_content_template( '404' );

$args = [
  'footer' => 'footer/401',
];  

if (function_exists('udesly_output_frontend_editor_data')) {
     udesly_output_frontend_editor_data('404');
}

get_footer('', $args);
