<?php
	$redis = new Redis();
	$redis->connect('127.0.0.1', 6379);
	$redis->auth('root');
	$redis->select('test');
	$redis->set("lkgame","");
	echo $redis->get("lkgame");