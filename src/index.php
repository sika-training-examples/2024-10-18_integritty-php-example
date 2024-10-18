<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$counter = $redis->incr('counter');

echo "<h1>Hello Integritty ".$counter."</h1>";

phpinfo();
