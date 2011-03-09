<?php


namespace Gravy;

class Gravy {
	
	public static function from_email($email, $size = 50, $rating = 'g', $url_only = FALSE)
	{
		 $base_url 	= '//www.gravatar.com/avatar/';
		 $email		= empty($email) ? '3b3be63a4c2a439b013787725dfce802' : md5($email);
		 $size		= '?s=' . $size;
		 $rating	= '&amp;r=' . $rating;

		 // URL only or the entire block of HTML ?
		 if($url_only == TRUE)
		 {
			$gravatar = $base_url . $email . $size . $rating;
		 }
		 else
		 {
				$url 		= $base_url . $email . $size . $rating;
				$gravatar 	= "<img src='$url' alt='Gravatar' class='gravy' />";
		 } 

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