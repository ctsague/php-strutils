<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

class StrUtils {
	private $str;

	public function __construct(){
 	 	$this->str = " hello word";
  		}

	function get_var(){
		return  $this->str;
	}

	 function bold(){
		$bold = "<strong>$this->str</strong>";	
		return $bold;
	}

	function italic(){
		$italic = "<em> $this->str</em>";
		return $italic;
	}

	function capitalize(){	
		$capitalize ="<span class='maj'>$this->str</span>";
		return $capitalize;

	}

	function uglify(){
	// 	gras
	$this->bold();
	// 	italic
	$this->italic();
	// 	underline
	 }
}

$myStrUtils = new StrUtils();
//var_dump($myStrUtils);
//echo $myStrUtils->get_var();
echo $myStrUtils->bold();
echo $myStrUtils->capitalize();


?>

</body>
</html>