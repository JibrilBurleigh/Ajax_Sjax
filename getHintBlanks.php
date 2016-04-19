
<?php
 $str = $_GET['txtHnt'];	
//Functions
 function getHint($str){
	 $myfile = fopen("txtHnt.txt", "r") or die("Unable to open file!");
	 $hint="";
	 while(!feof($myfile)) {
           $line = fgets($myfile);
		   if (strpos($line,$str)===0)
			    $hint = $hint." ".$line;
	 }
	 return $hint;
   }	 
	   
 //main
  echo getHint($str);
  sleep(5);
 ?>


