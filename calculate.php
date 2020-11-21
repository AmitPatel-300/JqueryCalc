<?php
global $operand1;
global $operand2;
global $operator;
global $OperPrev;
global $result;
global $temp;
global $length;

session_start();
$temp=0;
$operand1=$_REQUEST['OPR1'];
$operand2=$_REQUEST['OPR2'];
$operator=$_REQUEST['OPT'];



switch ($operator) {
	case '+':
		# code...
	    add($operand1,$operand2);
		break;

	case '-':
		# code...
	    sub($operand1,$operand2);
		break;

	case '*':
		# code...
	    mul($operand1,$operand2);
		break;

	case '/':
		# code...
	    div($operand1,$operand2);
		break;

	case '%':
		# code...
	    mod($operand1,$operand2);
		break;	

	case '=':
		# code...
	    result($operand1,$operand2);
		break;	
}

function add($a,$b) {
	global $temp;
	global $operand1;
	global $operand2;
	$temp=(int)$a+(int)$b;
	echo $temp;
}

function sub($a,$b) {
	global $temp;
	global $operand1;
	global $operand2;
	if($a==0){
	$temp=$b;
	echo $temp;	
	}
	else{
	$temp=(int)$a-(int)$b;
	echo $temp;	
	}	
}

function mul($a,$b) {
	global $temp;
	global $operand1;
	global $operand2;
	if($a==0){
	$a=1;
	$temp=(int)$a*(int)$b;
	echo $temp;	
	}
	else {
	$temp=(int)$a*(int)$b;
	echo $temp;	
	}	
}

function div($a,$b) {
	global $temp;
	global $operand1;
	global $operand2;
	if($a==0){
	$a=1;
	$temp=(int)$b/(int)$a;
	echo $temp;	
	}else{
	$temp=(int)$a/(int)$b;
	echo $temp;	
	}
		
}

function mod($a,$b) {
	global $temp;
	global $operand1;
	global $operand2;
	if($a==0){
	$temp=$b;
	echo($temp);				
	}else{
	$temp=$a%$b;
	echo($temp);	
	}
	
}

function result($a,$b) {
	$temp=$a;
	echo $temp;
}

?>