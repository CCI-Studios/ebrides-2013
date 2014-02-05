<?php

$aliases['dev'] = array(
	'uri'=> 'ebrides.ccistaging.com',
	'root' => '/home/staging/subdomains/ebrides/public_html',
	'remote-host'=> 'ccistaging.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),

	'ssh-options' => "-p 37241",
);

$aliases['live'] = array(
	'uri'=> 'ebrides.ca',
	'root' => '/home/ebrides/public_html',
	'remote-host'=> 'host.lambtonshield.com',
	'remote-user'=> 'ebrides',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	)
);