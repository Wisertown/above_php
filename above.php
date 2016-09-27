<?php 

function create_number_array($num){
	$arr = array();
	if(!is_int($num) && $num < 1){
		return "You need a whole number that is greater than 1!";
	}
	$num = round($num);
	for($i = 1; $i <= $num; $i++){
		array_push($arr, rand(1, 100));
	}
	return $arr;
}

function check_arrs($arr){
	if(is_string($arr))return $arr = " sorry numbers only.";

	if(array_filter($arr, 'is_int') === false){
		return $arr = "You need an array of only numbers";
	} else {
		return $arr;
	}
}




function above_below_count($num, $arr){
	$arr = check_arrs($arr);
	if(is_string($arr))return $arr;
	$abv = 0;
	$below = 0;
	$curr = 0;
	print_r($arr);
	if(count($arr) < 0){
		return "Your array needs to have at least one number in it.";
	} else if(!is_int($num) && $num < 1){
		return "You need a whole number greater than 0 to check against.";
	}
	foreach($arr as $ar){
		if($ar < $num)$below +=1;
		if($ar > $num)$abv +=1;
		if($ar == $num)$curr +=1;

	}
	return "above: " . $abv . ", below: " . $below . ", matched: " . $curr;
}
$new_arr = create_number_array(50);
print_r($new_arr); 
print_r(above_below_count(95, $new_arr));

?>