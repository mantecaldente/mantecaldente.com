<?php

	function __($str, $lang){

		if ( $lang != null ){

			if ( file_exists('languages/language_'.$lang.'.php') ){

				include('languages/language_'.$lang.'.php');
				
			} else {
                
                include('languages/language_en.php');
            }
            
            if ( isset($texts[$str]) ){
					$str = $texts[$str];
				}
		}

		return $str;
	}

?>