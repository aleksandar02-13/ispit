<?php
	$json=file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%2712893326%27%20and%20u%3D%27c%27&format=json");
	
	$data=json_decode($json);
	
	echo $data->query->results->channel->location->city."<br>";
	echo $data->query->results->channel->location->country."<br>";
	echo $data->query->results->channel->location->region."<br>";	
	echo "Brzina vetra: ".$data->query->results->channel->wind->speed." mph<br>";
	echo "Vlaznost vazduha: ".$data->query->results->channel->atmosphere->humidity." %<br>";	
	echo "Pritisak: ".$data->query->results->channel->atmosphere->pressure." in<br>";	
	echo "Temperatura: ".$data->query->results->channel->item->condition->temp." C<br>";	
	echo $data->query->results->channel->item->condition->text."<br>";