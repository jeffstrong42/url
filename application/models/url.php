<?php

class Url extends Eloquent{
	public static $timestamps = false;

	public static function get_unique_short_url()
	{
		$shortened = base_convert(rand(10000,99999), 10, 36); //create a random string
			
			if ( static::where_shortened($shortened)->first() ){
				static::get_unique_short_url();
			}

		return $shortened;
	}

}

?>