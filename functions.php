<!DOCTYPE html>
<html>
<head>
	<title>PHP Functions</title>
</head>
<body>
<?php

/*
1) The following function simply displays an paragraph
a) Write a line of code that will call the printDetails function
b) Modify the function so that you can pass arguments that specify the title of the film and the year of release. See the slides for a similar example. 
c) Make several function calls to output details of different films.
d) Modify the function so that it returns a string instead of printing it. Test this works.
*/

function printDetails()
{
	echo "<p>The film Jaws was released in 1975</p>";
}

/*
2) The following function converts a value in pounds into euros.
a) Write a line of code that will call this function. Test it works. 
b) Write your own similar function that will convert a value in inches into centimetres (1cm is 2.54 inches). Test this works.
*/
function convert($pounds)
{
	return $pounds*1.18;
}


/*
3) Look at the following function. It accepts the name of a continent as an argument and then returns an array of countries from that continent that have won the world cup. 
a) Write a line of code that will call this function. Then using a foreach loop output the elements of the returned array.
*/

function getWinnersByContinent($continent)
{
	$matchingCountries=[];
	if($continent==="Europe"){
		$matchingCountries=["France","Germany","Spain","England","Italy"];
	}else if($continent==="South America"){
		$matchingCountries=["Argentina","Brazil","Uruguay","England"];
	}
	return $matchingCountries;
}



/*
4) The following function accepts an array of filenames and returns only those filenames that have a png, jpg or jpeg extension. 
a) Write a line of code that will call this function. Then using a foreach loop output the elements of the returned array.
*/

function filterImageFileNames($arrOfFileNames)
{
	$matchingFileNames=[];
	foreach($arrOfFileNames as $filename){
		$fileExtension = substr($filename, strrpos($filename, '.') + 1);
		if($fileExtension==="png" || $fileExtension==="jpg" || $fileExtension==="jpeg"){
			$matchingFileNames[]=$filename;
		}
	}
	return $matchingFileNames;
}

/*
5) Look at the following code:

$scores=[20,13,4,23,65];
echo "<p>The average score was ".calcAverage($scores)."</p>";  //outputs ' The average score was 25'

a) Write the calcAverage() function. It should accept an array of numbers as input and return the 
average of all the numbers in the array.

*/

/*
6) Look at the following code:

var_dump(getPositiveNumbers([34,0,-31,4])) ; // [34,4]

a) Write the getPositiveNumbers() function. It should accept an array of numbers as input and return only those numbers that are greater than zero. 

*/

?>

</body>
</html>