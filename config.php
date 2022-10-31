<?php

// ----------------------------------------------------------------------
// Requirements
// ----------------------------------------------------------------------

require_once('includes/functions.php');





// ----------------------------------------------------------------------
// Define The General Variables
// ----------------------------------------------------------------------

$site_name = 'Legal Design Summit';

$page_description = 'How design thinking will change the legal business.';

$page_path = 'pages/';

$page = (!isset($_GET['page'])) ? 'home' : $_GET['page'];

$is_home = ($page == 'home') ? true : false;

$pages = array(
	'Home',
	'Gallery',
	'Program',
	'Speakers',
#	'Brainfactory',
#	'Side Events',
	'Volunteer',
#	'Our Story',
	'About Us',
#	'2016',
#	'2017',
#	'Delegations',
	'Why attend?'
);

$urls = array(
	'Get Tickets' => 'http://tickets.legaldesignsummit.com',
	'Speakers' => '/program#section-speakers',
	'Volunteer' => '/volunteer.php',
	'Home' => '/index.php'
);

foreach ($pages as $key => $value) {

	if (sanitize($value) == $page) $page_title = $pages[$key];

}

$page_classes = array();


// ----------------------------------------------------------------------
// Define The Sharing Variables
// ----------------------------------------------------------------------

$share['url'] = current_url(true);
$share['site_name'] = $site_name;
$share['title'] = $page_title;
$share['caption'] = '';
$share['description'] = $page_description;
$share['image'] = current_url(true) . 'images/meta.png';





// ----------------------------------------------------------------------
// Define The Site Activity State
// ----------------------------------------------------------------------

$site_active = true;

if ($site_active == true) array_push($page_classes, 'active');
if ($site_active != true) array_push($page_classes, 'not-active');


// ----------------------------------------------------------------------
// Define The Page Files
// ----------------------------------------------------------------------

$file = $page_path . $page . '.php';

$excluded_pages = array(
	'maintenance',
    'concierge'
);





// ----------------------------------------------------------------------
// Define The Page Body Classes
// ----------------------------------------------------------------------

if ($site_active == true && (file_exists($file) && !in_array($page, $excluded_pages))) array_push($page_classes, $page);

$page_classes = implode(' ', $page_classes);

?>
