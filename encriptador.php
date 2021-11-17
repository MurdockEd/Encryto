<?php

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
require __DIR__ . '/vendor/autoload.php'
Timer::start();
$time = Timer::stop();
var_dump($time);
print Timer::secondsToTimeString($time);

?>