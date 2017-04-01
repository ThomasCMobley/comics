<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comics;

class ComicController extends Controller{
	
	public function index(){
		$comics = Comics::orderBy('category_id')
			->orderBy('comic_name')
			->get(); 
	    return view('comics', compact('comics'));
	}

	public function fetchComic(Comics $comics) {
		$options = array(
			CURLOPT_RETURNTRANSFER => true,     // return web page
			CURLOPT_HEADER         => false,    // don't return headers
			CURLOPT_FOLLOWLOCATION => true,     // follow redirects
			CURLOPT_ENCODING       => "",       // handle all encodings
			CURLOPT_USERAGENT      => "spider", // who am i
			CURLOPT_AUTOREFERER    => true,     // set referer on redirect
			CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
			CURLOPT_TIMEOUT        => 120,      // timeout on response
			CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		);

		$ch = curl_init( $comics->comic_url );
		curl_setopt_array( $ch, $options );
		$content = curl_exec( $ch );
		if (curl_errno( $ch ))
		{
			$err     = curl_errno( $ch );
			$errmsg  = curl_error( $ch );
			$content = "Error Number: $err<br/>Error Message: $errmsg<br/>Header: ".curl_getinfo( $ch );
		}
		curl_close( $ch );
		$aResponse = ['success'=>false, 'url'=>''];
		preg_match('/data-zoom-image="(.+).src="(.+\.[a-z]+)/', $content, $matches);
		if (count($matches)){
			$aResponse['url'] = $matches[count($matches)-1];
			$aResponse['success'] = true;
		} else {
			preg_match('/(assets\.amuniversal\.com\/[\d\S]{1,})/', $content, $matches);
			if (count($matches)){
				$aResponse['url'] = $matches[count($matches)-1];
				$aResponse['success'] = true;
			} else {
				$aResponse['url'] = '/images/sorry.png';
			}
		}
		return $aResponse;
	}
}