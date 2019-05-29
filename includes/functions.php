<?php

// ------------------------------ //
// Get Current Url
// ------------------------------ //

function current_url($get_path = false, $get_filename = false) {
	
	$page_url = 'http';
	
	if ( (array_key_exists('HTTPS', $_SERVER) && $_SERVER['HTTPS'] == 'on') || (array_key_exists('HTTP_X_FORWARDED_PROTO', $_SERVER) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ) $page_url .= 's';
	
	$page_url .= '://';
	
	if ($_SERVER['SERVER_PORT'] != '80') {
		
		$page_url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
		
	} else {
		
		$page_url .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		
	}
	
	$parsed_page_url = parse_url($page_url);
	
	$url = $parsed_page_url['scheme'] . '://' . $parsed_page_url['host'];
	
	$path = $parsed_page_url['path'];
	$filename = basename($_SERVER['SCRIPT_NAME']);
	
	$path = str_replace($filename, '', $path);
	
	if ( $get_path == true ) $url .= $path;
	if ( $get_filename == true ) $url .= $filename;
	
	return $url;

}





// ------------------------------ //
// Menu
// ------------------------------ //

function build_menu($items, $urls = NULL) {
	
	global $page;
	
	$a = 0;
	
	$menu = '<ul class="menu">';
	
	foreach ($items as $key => $value) {
		
		$menu_classes = array();
		
		array_push($menu_classes, sanitize($value));
		
		if ($a == 0) array_push($menu_classes, 'first');
		if ($a == count($items) - 1) array_push($menu_classes, 'last');
		if (sanitize($value) == $page || sanitize($key) == $page) array_push($menu_classes, 'active');
		
		$menu_classes = implode(' ', $menu_classes);
		
		if (is_array($value)) {
			
			$menu .= '<li class="' . $menu_classes . '"><a href="' . ( (array_key_exists($key, $urls)) ? $urls[$key] : sanitize($key) ) . '">' . $key . '</a>' . build_menu($value, $urls) . '</li>' . "\n";
			
		} else {
			
			$menu .= '<li class="' . $menu_classes . '"><a href="' . ( (array_key_exists($value, $urls)) ? $urls[$value] : sanitize($value) ) . '">' . $value . '</a></li>' . "\n";
			
		}
		
		$a++;
		
	}
	
	$menu .= '</ul>';
	
	return $menu;
	
}





// ------------------------------ //
// Sanitize
// ------------------------------ //

function sanitize($string, $slug = '-') {
	
    $pattern = array(
		'Š'=>'S', 'š'=>'s', '?'=>'Dj', '?'=>'dj', 'Ž'=>'Z', 'ž'=>'z', '?'=>'C', '?'=>'c', '?'=>'C', '?'=>'c', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', '?'=>'', '?'=>''
	);
	
	$string = strtolower(strtr($string, $pattern));
	
	$find = array('/\s+/', '/[^\w-\p{L}\p{N}\p{Pd}]/');
	
	$replace = array($slug, '');
	
	return preg_replace($find, $replace, $string);
	
}





// ------------------------------ //
// Email Encoding        
// ------------------------------ //

function encode_email($e, $link = false) {
	
	for ($i = 0; $i < strlen($e); $i++) { $output .= '&#' . ord($e[$i]) . ';'; }
	
	if ($link == true) $output = '<a href="mailto:' . $output . '">' . $output . '</a>';
	
	return $output;
	
}

?>