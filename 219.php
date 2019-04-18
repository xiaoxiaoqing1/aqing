<?php 


// interface Chou
// {
// 	private function index($m){
// 		echo "123";
// 	}
// }


/**
* 
*/
class Chou
{
	
	function index($m)
	{
		$n = $m%2;
		if ($n==1) {
			$a=fell($n/2);
			print_r($a);
			return true;
		}else{
			echo "不是素数";
			return false;
		}
	}
}





//$m为丑数
$m = 3;
$chou = new Chou();
$chou->index($m);




 ?>