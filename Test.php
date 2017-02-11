<?php
class Test extends PHPUnit_Framework_TestCase
{
	public function testPrime() { //A test for the prime function in the index.php file
		include "./index.php";
		for($i=2;$i<$mPrime;$i++){ // For all smaller integer then $mprime : check whether it's a divider or not
			$this->assertTrue($mPrime%$i!=0); //If one integer is a divider then the test script fails
		}
  	}
}
?>