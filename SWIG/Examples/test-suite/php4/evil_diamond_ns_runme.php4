<?php
// Sample test file

require "tests.php4";
require "evil_diamond_ns.php";

check::classes(array("foo","bar","baz","spam"));
check::functions("test");
check::is_a("bar","foo");
check::is_a("baz","foo");
check::is_a("spam","foo");
check::is_a("spam","bar");
//No multiple inheritance
//check::is_a("spam","baz");
$spam=new spam();
$_spam=test($spam);

var_dump($spam);
var_dump($_spam);

check::done();
?>
