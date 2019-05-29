<?php

if ( file_exists($file) && !in_array($page, $excluded_pages) ) {
	
	require_once($file);
	
} else {
	
	print '<p>Sivua ei löydy</p>';
	
}

?>
