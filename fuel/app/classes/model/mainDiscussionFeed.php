<?php class Model_mainDiscussionFeed extends \Orm\Model
{

	public static function runcurl($url)
	{
		if (isset($url))
		{
			$curl = curl_init();

			$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
			$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
			$header[] = "Cache-Control: max-age=0";
			$header[] = "Connection: keep-alive";
			$header[] = "Keep-Alive: 300";
			$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
			$header[] = "Accept-Language: en-us,en;q=0.5";
			$header[] = "Pragma: ";

			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)');
			curl_setopt($curl, CURLOPT_REFERER, 'https://www.google.com/');
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
			curl_setopt($curl, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
			curl_setopt($curl, CURLOPT_REDIR_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
			curl_setopt($curl, CURLOPT_POSTREDIR, 2);
			curl_setopt($curl, CURLOPT_MAXREDIRS, 3);
			curl_setopt($curl, CURLOPT_MAXCONNECTS, 3);
			curl_setopt($curl, CURLOPT_CAINFO, "/cacert.pem"); //need to figure out how to load the cert for HTTPS where to store it...
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curl, CURLOPT_SSL_VERIFYSTATUS, false);
			curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
			curl_setopt($curl, CURLOPT_AUTOREFERER, true);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 90);
			curl_setopt($curl, CURLOPT_TIMEOUT, 30);

			$html = curl_exec($curl);
			curl_close($curl);

			return $html;
		}

	}


	public static function feedkit($url)
	{
		$doc = new DOMDocument();
		$doc->preserveWhiteSpace = false;
		$doc->loadXML($url, LIBXML_PARSEHUGE);
		$doc->formatOutput = true;

		$bxe = new SimpleXMLElement($doc->saveXML());

		$bt = '<ul class="list-group">';

		foreach ($bxe->channel->item as $item)
		{
			foreach ($item->xpath ('media:thumbnail') as $mediathumbnail) {
				$thumb = $mediathumbnail['url'];
			}
		}
		//use objects or arrays
		foreach ($bxe->channel->item as $newsitem) {
			//$thumb = $node->getElementsByTagName('media:thumbnail')->item(0)->attributes->getNamedItem('url')->nodeValue;

			/*$t_attrs = $newsitem->thumbnail[0]->attributes();
			## we only want the url for this purpose
			$thumb = $t_attrs['url'];*/
			foreach ($newsitem->xpath ('media:thumbnail') as $mediathumbnail) {
				$thumb = $mediathumbnail['url'];
			}

			$bt .= 
				'<li class="list-group-item d-flex justify-content-between align-items-center" style="height:350px;margin-bottom:20px;margin-top:20px;"><div><img src="'.$thumb.'" width="300px" height="100%"'.'</img>'.
				'<span>'.$newsitem->description.'</span></br>'.
				'<a href="#"'. ' onClick=clearDiscussionFeed("/theconverse/loadArticle");>'.$newsitem->title.'</a>'.'<br><small><b>Published:'.$newsitem->pubDate.'</b></small></li></div>';
			$bt .= "\n";
			}
		$bt .= '</ul>';
		return $bt;
	}

}