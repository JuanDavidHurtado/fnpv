<?php
/**
 * google_search_api()
 * Query Google AJAX Search API
 *
 * @param array $args URL arguments. For most endpoints only "q" (query) is required.
 * @param string $referer Referer to use in the HTTP header (must be valid).
 * @param string $endpoint API endpoint. Defaults to 'web' (web search).
 * @return object or NULL on failure
 */
function google_search_api($args, $referer = 'http://localhost/test/', $endpoint = 'web'){
	$url = "http://ajax.googleapis.com/ajax/services/search/".$endpoint;

	if ( !array_key_exists('v', $args) )
		$args['v'] = '1.0';

	$url .= '?'.http_build_query($args, '', '&');

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// note that the referer *must* be set
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	$body = curl_exec($ch);
	curl_close($ch);
	//decode and return the response
	return json_decode($body);
}

$rez = google_search_api(array(
		'q' => 'antique shoes',
 ));

print_r($rez);
?>