<?php

/**
 * @package    Gravy
 * @version    1.0
 * @author     Ryan Foster
 * @link       http://github.com/rfosta/gravy
 */

namespace Gravy;

class Gravy {
	
	public static function from_email($email, $size = 50, $rating = 'g', $url_only = FALSE)
	{
		 return self::from_hash(md5($email), $size, $rating, $url_only);
	}

	public static function from_hash($hash, $size = 50, $rating = 'g', $url_only = FALSE)
	{
		 $base_url 	= '//www.gravatar.com/avatar/';
		 $hash = empty($hash) ? '' : $hash;
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