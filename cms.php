<?php
variables([
	'link-to-sub-node-home' => true,
	'humanize'
]);

function site_before_render() {
	$section = variable('section');
	if ($section != 'ideas') return;

	$node = variable('node');
	if ($section == $node) return;

	DEFINE('NODEPATH', SITEPATH . '/' . variable('section') . '/' . $node);
	variables([
		'nodeSiteName' => humanize($node),
		'nodeSafeName' => $node,
		'submenu-at-node' => true,
		'nodes-have-files' => true,
	]);
}
