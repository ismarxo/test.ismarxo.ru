<?php

require_once('./traits/start.php');

class App
{
	public function __construct()
	{
		echo 'construct app!';
	}

	use start;
}

$app = new App;
$app->start();