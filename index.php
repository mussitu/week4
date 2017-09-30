<?php
//$date =  date('Y-m-d', time());
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

//2012
$year = array("2100", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo "<br>";

if(strtotime($date)<strtotime($tar))
	echo "date is smaller";
else if(strtotime($date)==strtotime($tar))
{
	echo "date is equal";
}

echo "<br>";

if($date>$tar)
	echo "Tar is in the past";
else if($date<$tar){
	echo "Tar is in the future";
}
else{
	echo "Tar and Date are the same. Oops!";
}

echo "<br>date length".strlen($date)."<br>";

$numSlashes=0;
for ($i=0; $i <strlen($date) ; $i++) { 
		//echo substr($date, $i,1);
	if(substr($date, $i,1)=="/")
		{
			echo "Slash / found at index ".$i."<br>";
			$numSlashes++;

		}
}

echo "<br>number of slashes= ".$numSlashes;

	
	echo "<br>Number of words in \$Date: ".str_word_count($date)."<br>";

//Find the length of a string
	$string="This is a random string!";
	echo "<br>The length of the following string \"".$string."\" is ".strlen($string)."<br>";
	echo "The last 2 characters in \$date are ".substr($date, -2);
	$cart= array();

	for ($i=0; $i <strlen($date) ; $i++) { 
		if (substr($date, $i,1)!="/") {
			array_push($cart, substr($date, $i,1));
		}
		
	}

	print_r($cart);


	//leap year?

	foreach ($year as $key => $value) {
		//while($value%4==0)
		//{
			switch ($value) {
				case $value%100==0 && $value%400!=0:
					echo "<br>".$value." Not a leap year<br>";
					break;
				case $value%4==0:
					echo $value." leap year2<br>";
					break;
				default:
					echo $value. "is not a leap year<br>";
					break;
			//}

		}
	}

echo "daf";

?>

