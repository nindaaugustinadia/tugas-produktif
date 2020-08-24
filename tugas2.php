<?php

class rumah
{
	var $a;
	var $b;
	var $c;
	function rumah_a(){
		return " rumah 1 meter seharga Rp.3.000.000";
		echo "<br>";
	}
	function rumah_b(){
		return " rumah 2 meter seharga Rp.3.500.000";
		echo "<br>";
	}
	function rumah_c(){
		return " rumah 3 meter seharga Rp.4.000.000";
	}

}

$rumah = new rumah();
$rumah = new rumah();
$rumah = new rumah();

echo $rumah -> rumah_a();
echo $rumah -> rumah_b();
echo $rumah -> rumah_c();

?>