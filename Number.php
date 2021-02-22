<?php 
$GithubRawURI= "https://github.com/mdahsanekram/convetrnumtoword.git/Number.php";

$one = array("", "one ", "two ", "three ", "four ", 
			"five ", "six ", "seven ", "eight ", 
			"nine ", "ten ", "eleven ", "twelve ", 
			"thirteen ", "fourteen ", "fifteen ", 
			"sixteen ", "seventeen ", "eighteen ", 
			"nineteen "); 
 
$ten = array("", "", "twenty ", "thirty ", "forty ", 
			"fifty ", "sixty ", "seventy ", "eighty ", 
			"ninety "); 

// n is 1- or 2-digit number 
function numToWords($n, $s) 
{ 
	global $one, $ten; 
	$str = ""; 
	
	// if n is more than 19, divide it 
	if ($n > 19) 
		{ 
			$str .= $ten[(int)($n / 10)]; 
			$str .= $one[$n % 10]; 
		} 
	else
		$str .= $one[$n]; 

	// if n is non-zero 
	if ($n != 0 ) 
		$str .= $s; 

	return $str; 
} 

// Function to print a given number in words 
function convertToWords($n) 
{ 
	
	$out = ""; 

	// handles digits at thousands and tens 
	 
	$out .= numToWords(((int)($n / 1000) % 100), "thousand "); 

	
	$out .= numToWords(((int)($n / 100) % 10), "hundred "); 

	if ($n > 100 && $n % 100) 
		$out .= " "; 

	// handles digits at ones and tens 
	 
	$out .= numToWords(($n % 100), ""); 

	return $out; 
} 


// long handles upto 9 digit no 

$n=12345;
$m=01;

	echo $n;
	
	echo convertToWords($n);

	echo $m;
	
	echo convertToWords($m);
?> 

