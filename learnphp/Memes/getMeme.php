<?php

$url = "https://meme-api.com/gimme";

$response = file_get_contents($url);

echo $response;
