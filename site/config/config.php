<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-b3743d396f4d2a92e40c01a187d34311');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/


/*

Language
--------

*/


// detect the user language to set it properly
c::set('language.detect', false);

// set the different languages
c::set('languages', array(
	array(
		'code'		=>	'it',
		'name'		=>	'Italiano',
		'default'	=>	true,
		'locate'	=>	'it_IT, it_CH',
		'url'		=>	'/',
	),
	array(
		'code'		=>	'de',
		'name'		=>	'Deutsch',
		'locate'	=>	'de_DE, de_CH',
		'url'		=>	'/de',
	),
	array(
		'code'		=>	'fr',
		'name'		=>	'Français',
		'locate'	=>	'fr_FR, fr_CH',
		'url'		=>	'/fr',
	),
	array(
		'code'		=>	'en',
		'name'		=>	'English',
		'locate'	=>	'en_US, en_GB',
		'url'		=>	'/en',
	),
));
