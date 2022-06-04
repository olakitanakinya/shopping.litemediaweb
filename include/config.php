<?php
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "litemed1_s2user") ;
defined('pass') ? null : define("pass","123Pass!1000000");
defined('database_name') ? null : define("database_name", "litemed1_s2db") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>