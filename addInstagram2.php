		<?php
		// Supply a user id and an access token
		$userid = "39886300";
		$accessToken = "39886300.5b9e1e6.8820120a4515403498ca87744101573e";
		
		
		// Gets our data using cURL to make HTTP request in PHP
		function fetchData($url){
		     $ch = curl_init();
		     curl_setopt($ch, CURLOPT_URL, $url);
		     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		     $result = curl_exec($ch);
		     curl_close($ch); 
		     return $result;
		}
		
		// Pulls data.
		$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
	
		
		//Use JSON encoded string to convert into  PHP variable.
		$result = json_decode($result);
	?>
	
	<?
	$i=0;
	?>
		
	<?php foreach ($result->data as $post): ?>
	
		<a class="group" rel="group1" href="<?= $post->images->low_resolution->url ?>"><img src="<?= $post->images->thumbnail->url ?>"></a>
	
	<?
	$i++;
	if ($i==6) break;
	?>
	
	<?php endforeach ?>
		
	</div>	
