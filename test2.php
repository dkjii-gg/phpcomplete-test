<?php
namespace testnamespace2;

require_once( 'test.php' );

class test extends \testnamespace\test {
	function __construct() { echo "a"; }
}
