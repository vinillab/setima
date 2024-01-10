<?php

$args = [
	"wfPage" => "657c4a92c364e232beb357e0",
	"body" => "",
	"head" => "head/front-page",
];

get_header("", $args);

get_template_part("template-parts/content/front-page");

$args = [
	"footer" => "footer/front-page",
];

get_footer("", $args);
