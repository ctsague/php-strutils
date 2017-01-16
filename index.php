<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StrUtils</title>
</head>
<body>
<?php

class StrUtils {
	private $str ="";

	function __construct($newString){
		$this->str = $newString;
	}

	public function toString (){
		return $this->str;
	}
  	
  	function bold(){
		$bold = "<strong>$this->str</strong>";	
		$this->str = $bold;
	}
	 function italic(){
		$italic = "<em>$this->str</em>";
		$this->str = $italic;
	}

	 function underline(){
		$underline = "<u> $this->str</u>";
		$this->str = $underline;
	}

	function uglify(){
	$this->bold();
	$this->italic();
	$this->underline();
	}
}

$maString = new StrUtils(" simplonco");
//echo $maString->toString();
// $maString->bold();
// $maString->italic();
//$maString->underline();
$maString->uglify();
echo $maString->toString();

?>
	
</body>
</html>