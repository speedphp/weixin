<?php
date_default_timezone_set('PRC');

// 公众号的TOKEN，验证时要用的
define("TOKEN", "123456");

$config = array(
	'rewrite' => array(
		'<c>/<a>'          => 'main/index',
		'/'                => 'main/index',
	),
);

$domain = array(
	"www.speedphp.com" => array(
		'debug' => 1,
		'mysql' => array(),
	),
);

return $domain[$_SERVER["HTTP_HOST"]] + $config;
