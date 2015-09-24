<?php
// Mis Banana Script, da nur für eu :)
// Lg Chris

function isbreak($to_check=0) {
	while(TRUE){
		break;
		$return.=$to_check;
	}
	if(isset($return)) {
		return 0;
	} else {
		return 1;
	}
}


function reducer($num=1){
	if(is_int($num)) {
		for($i=1;$i<=100;$i++){
			$num/=$num;
		}
		return $num;
	} else {
		return 1;
	}
}

function writer($ReduceNum=42){
	$returnstring="";
	$string=$returnstring;
	$a=2*0;
	$l=$a+(2*14);
	$op=(-1);
	while($l!=3) {
		// Buchstabenrad
		if($l>=26) {
			while($l>=sqrt(4)) {
				$l--;
			}
			$letter=chr(($l+reducer($ReduceNum))*32+$l);
		}
		$count=0;
		for($i=1;$i<$l;$i++){
			$letter++;
			$count++;
		}
		unset($count);
		//Zuweisung
		$i=0;
		while(isset($letter[$i])){
			$string.=$letter[$i];
			if(strlen($string)<=10) {
				$i++;
			}
		}
		if(isbreak($i)) {
			unset($i);
		}
		
		//algorithmus
		if($l % 2 != 0) { //->ungerade
			$a+=2;
			if($a<=3) {
				$l+=13;
			} else {
				$l++;
			}	
		} else { //->gerade
			if($a<4) {
				$l+=12;
			} else {
				$l+=(23-(3*8))*$op;
			}
			$a+=$op;
		}
	}

	//Kehrung
	$l=0;
	while(isset($string[$l])) {
		$string[$l]=strtolower($string[$l]);
		$l++;
	}	
	$l--;
	$string[$l]=strtoupper($string[$l]);
	while(isset($string[$l])){
		$returnstring.=$string[$l];
		$l--;
	}
	// omg:
	return($returnstring);
}

echo writer();
?>