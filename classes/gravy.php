<?php

/**
 * @package    Gravy
 * @version    1.0
 * @author     Ryan Foster
 * @link       http://github.com/rfosta/gravy
 */

namespace Gravy;

class Gravy {
	
	public static function from_email($email)
	{
		 $gravatar = self::from_hash(md5($email));

		 return $gravatar;
	}

	public static function from_hash($hash, $size = 50, $rating = 'g', $url_only = FALSE)
	{
		 $base_url 	= '//www.gravatar.com/avatar/';
		 $hash = empty($hash) ? '54bf10ec8f553d3a3c2264ad37273b3e' : $hash;
		 $size = '?s=' . $size;
		 $rating = '$amp;r=' . $rating;
		 
		 if ($url_only == TRUE)
		 {
		 	$gravatar = $base_url . $hash . $size . $rating;
		 }
		 else
		 {
		 	$url = $base_url . $hash . $size . $rating;
		 	$gravatar = "<img src='$url' alt='gravatar' class='gravy' />";
		 }

		 return $gravatar;
	}
}