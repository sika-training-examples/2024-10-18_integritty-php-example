<?php

$redis = new Redis();
$redis->connect($_ENV["REDIS"], 6379);
$counter = $redis->incr('counter');

echo "<center>";
echo "<h1>Hello Integritty ".$counter." ".$_ENV["HOSTNAME"]."</h1>";
echo "</center>";
