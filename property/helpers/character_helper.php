<?php

	function character_limiters($text,$count){
		
		$limited_word = word_limiter($text,$count);
		if($count<10)
		{
			return $limited_word;
		}
		else
		{
			return $limited_word."..";
		}
		
	}


?>