--TEST--
Test 009: mount test
--SKIPIF--
--FILE--
<?php
include_once("init.php");

$sitemap = new popoon ("sitemap009.xml","/",$BX_config['popoon']);

?>
--EXPECT--
<?xml version="1.0" encoding="iso-8859-1"?>
<html>
<head>popoon test</head>
<body>
<p>Hello World</p>
</body>
</html>
