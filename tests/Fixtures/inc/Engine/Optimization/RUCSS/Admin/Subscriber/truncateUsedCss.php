<?php

$items = [
	[
		'url'            => 'http://example.org/home',
		'css'            => 'h1{color:red;}',
		'unprocessedcss' => json_encode( [] ),
		'retries'        => 3,
		'is_mobile'      => false,
	],
	[
		'url'            => 'http://example.org/home',
		'css'            => 'h1{color:red;}',
		'unprocessedcss' => json_encode( [] ),
		'retries'        => 3,
		'is_mobile'      => true,
	],
];


return [
	'shouldNotTruncateUnusedCSSDueToMissingSettings' => [
		'input' => [
			'items'             => $items,
			'remove_unused_css' => false,
		],
	],
	'shouldTruncateUnusedCSS' => [
		'input' => [
			'remove_unused_css' => true,
			'items'             => $items,
			'is_disabled' => true,
			'delete_used_css_row' => true,
			'used_css_count' => 0,
		],
	],
	'shouldNoTruncateOnHookDisabled' =>  [
		'input' => [
			'remove_unused_css' => true,
			'items'             => $items,
			'is_disabled' => false,
			'used_css_count' => 10,
		]
	]
];
