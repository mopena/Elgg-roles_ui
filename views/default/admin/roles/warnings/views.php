<?php

echo elgg_view('output/url', array(
	'text' => "<sup>&lowast;</sup>",
	'title' => elgg_echo('roles:ui:warning:views'),
	'class' => 'roles-ui-warning',
	'href' => false
));