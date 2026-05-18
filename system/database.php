<?php
// base system prefix
define('BOOM_PREFIX', 'localhost_chats_');

// optional base domain
define('BOOM_DOMAIN', 'http://localhost:8080/chats/');

// default redis configuration
define('REDIS_IP', '127.0.0.1');
define('REDIS_PORT', 6379);
define('REDIS_TIMEOUT', 0.2);
define('REDIS_PASS', '');

// you can edit these lines to configure new setting for your chat
define('BOOM_DHOST', 'localhost');
define('BOOM_DUSER', 'root');
define('BOOM_DPASS', '');
define('BOOM_DNAME', 'chats');

// base system main path do not modify
define('BOOM_PATH', dirname(__DIR__));

// do not modify those variables
define('BOOM_CRYPT', '2bcbTdU75d0-51E0d570e1636fcc29H00eRNc0--2');
define('BOOM_INSTALL', 1);
define('BOOM', 1);
?>