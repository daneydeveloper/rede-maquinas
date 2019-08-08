<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Min {
  function min_js($arr){
		$this->minify($arr, 'https://javascript-minifier.com/raw');
	}
	
	function min_css($arr){
		$this->minify($arr, 'https://cssminifier.com/raw');
	}
	
	function minify($arr, $url) {
		foreach ($arr as $key => $value) {
			$handler = fopen($value, 'w') or die("File <a href='" . $value . "'>" . $value . "</a> error!<br />");
			fwrite($handler, $this->getMinified($url, file_get_contents($key)));
			fclose($handler);
			echo( $value . " -> Minified Sucess");
		}
	}
	
	function getMinified($url, $content) {
		$postdata = array('http' => array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => http_build_query( array('input' => $content) ) ) );
		return file_get_contents($url, false, stream_context_create($postdata));
	}
}