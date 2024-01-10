<?php

$args = [
	"wfPage" => "658064252d1607000c54de91",
	"body" => "",
	"head" => "head/page-politica-de-seguranca",
];

get_header("", $args);

get_template_part("template-parts/content/page-politica-de-seguranca");

$args = [
	"footer" => "footer/401",
];

get_footer("", $args);
