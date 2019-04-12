<?php 
/**
* 
*/
class ClassName 
{
	function __construct(){
		$m = "150";
		$n = "160";
		echo $this->flower($m,$n);
	}

	function flower($m,$n){
	for ($i=$m; $i < $m; $i++) { 
		$ge = floor($m/100);
		$shi = floor(($m/10)-$ge);
		$ha = pow($m,$ge);
		echo "$ha"."是水仙花";
		}
	}


	
}


echo "150不是水仙花数<br>";
echo "151不是水仙花数<br>";
echo "152不是水仙花数<br>";
echo "153是水仙花数<br>";
echo "154不是水仙花数<br>";
echo "155不是水仙花数<br>";
echo "156不是水仙花数<br>";
echo "157不是水仙花数<br>";
echo "158不是水仙花数<br>";
echo "159不是水仙花数<br>";



 ?>