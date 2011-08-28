<?php

/**
 * @package    Gravy
 * @version    1.0
 * @author     Ryan Foster
 * @link       http://github.com/rfosta/gravy
 */

namespace Gravy;

class Gravy {
	
	public static function from_email($email, $size = 50, $rating = 'g', $default = null, $url_only = FALSE)
	{
		 return self::from_hash(md5($email), $size, $rating, $default, $url_only);
	}

	public static function from_hash($hash, $size = 50, $rating = 'g', $default = null, $url_only = FALSE)
	{
		 $base_url 	= '//www.gravatar.com/avatar/';
		 $hash = empty($hash) ? '' : $hash;
		 $size = '?s=' . $size;
		 $rating = '&amp;r=' . $rating;
		 $default = is_null($default) ? '' : '&amp;d='.$default;	 
		 
		 $gravatar = $base_url . $hash . $size . $rating . $default;
		 if ($url_only != TRUE)
		 {
		 	$gravatar = "<img src='$gravatar' alt='gravatar' class='gravy' />";
		 }

		 return $gravatar;
	}
}