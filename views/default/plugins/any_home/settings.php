<?php

/* @var $entity ElggPlugin */
$plugin = elgg_extract('entity', $vars);

echo elgg_view('output/longtext', ['value' => elgg_echo('any_home:settings:redirect:info')]);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('any_home:settings:redirect_logged_in'),
	'name' => 'params[redirect_logged_in]',
	'value' => $plugin->redirect_logged_in,
]);

echo elgg_view_field([
	'#type' => 'text',
	'#label' => elgg_echo('any_home:settings:redirect_logged_out'),
	'name' => 'params[redirect_logged_out]',
	'value' => $plugin->redirect_logged_out,
]);
