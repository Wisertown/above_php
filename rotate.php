<?php 

function rotate_string($str, $num){


	if(!is_int($num) || !is_string($str)){
		return "Sorry you need a full string or a real number";
	}
	if(strpos($str, " ") === true){
		return "no spaces please, only one string";
	}
	$num = round($num);
	if($num > strlen($str))$num = $num % strlen($str);

	return substr($str, -$num) . substr($str, 0, -$num);

}
print_r(rotate_string("helloThere", 12));