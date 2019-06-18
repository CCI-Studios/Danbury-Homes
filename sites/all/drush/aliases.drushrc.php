<?php


$aliases['dev'] = array(
	'uri'=> 'danbury.ccistaging.com',
	'root' => '/home/staging/subdomains/danbury/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=>'-p 37241'
);

$aliases['live'] = array(
	'uri'=> 'builtbydanbury.com',
	'root' => '/home/builtbydan/subdomains/live/public_html',
	'remote-host'=> 'host.pokertrainingguide.com',
	'remote-user'=> 'builtbydan',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
		'%drush'=> '/home/builtbydan/.composer/vendor/bin/'
	),
);