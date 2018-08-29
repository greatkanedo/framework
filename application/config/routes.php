<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('hello', function() {
	echo "hello world";
});

Macaw::get('', 'App\\Controllers\\Home@index');

Macaw::dispatch();