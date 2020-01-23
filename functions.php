<!DOCTYPE html>
<html>
<head>
	<title>PHP Functions</title>
</head>
<body>
<?php
include "example-functions.php";
/*
1) The function printDetails prints details about films.
a) Write a line of code that will call the printDetails function
b) Make several function calls to output details of different films.
c) Modify the function so that you can pass a third argument that specifies the duration of the film.
*/


printDetails("Jaws","1975");
printDetails("Back to the Future","1985");
printDetails("Inception","2010");



/*
2) The function convertToEuros converts a value in pounds into euros.
a) Write a line of code that will call this function. Test it works by outputting the result using an echo statement.
*/



$euros = convertToEuros(100);
echo $euros;


/*
2) The function addTwoNumbers adds two numbers together and returns the result.
a) Write a line of code that will call this function. Test it works by outputting the result using an echo statement.
*/

$result = addTwoNumbers(10,5);
echo "<p>10 + 5 = {$result}</p>"; // 10 + 5 = 15

/*
3) Look at the getWinnersByContinent function. It accepts the name of a continent as an argument and then returns an array of countries from that continent that have won the World Cup.
a) Write a line of code that will call this function. Use a foreach loop output the elements of the returned array.
*/

$winners = getWinnersByContinent("South America");
foreach($winners as $winner){
	echo "<p>{$winner}</p>";
}

/*
4) Look at the getPositiveNumbers function. It accepts an array of numbers and returns only those numbers that are greater than zero
a) Write a line of code that will call this function. Use a foreach loop output the elements of the returned array.
*/

$posNumbers = getPositiveNumbers([34,0,-31,4]);
foreach($posNumbers as $num){
	echo "<p>{$num}</p>"; // 34, 4
}

/*
5) Look at the filterImageFileNames function. It accepts an array of filenames and returns only those filenames that have a png, jpg or jpeg extension.
a) Write a line of code that will call this function. Using a foreach loop output the elements of the returned array.
*/

$filenames = ["report.docx","logo.png","cat.jpeg","plan.pdf","btn.jpg"];
$matchingFiles = filterImageFileNames($filenames);
foreach($matchingFiles as $filename){
	echo "<p>{$filename}</p>";
}

/*
6) Write your own function called isValidUsername. The function should accept a single argument, a string, and return a value of true if the string 6 characters or more in length and false if it isn't. Have a look at http://php.net/manual/en/function.strlen.php for info on determining string length. Here's some example code that uses the function. Uncomment this code code to check it works.
*/


$userA =  "khutton";
if(isValidUsername($userA)){
	echo "<p>Valid username</p>";
}else{
	echo "<p>Not a valid username</p>";
}



/*
7) Write your own function called printList(). It should accept a single argument, an array, and output an HTML list, with each element in the array as an item in the list. It shouldn't return any values. Use this function to print out the returned values from getWinnersByContinent, getPositiveNumbers and filterImageFileNames.
*/

printList($posNumbers);

/*
8) Look at the following code:

$scores = [20,13,4,23,65];
$avg = calcAverage($scores);
echo "<p>The average score was {$avg}</p>";  //outputs ' The average score was 25'

Write the calcAverage function. It should accept an array of numbers as input and return the average of all the numbers in the array.

*/
$scores = [20,13,4,23,65];
$avg = calcAverage($scores);
echo "<p>The average score was {$avg}</p>";  //outputs ' The average score was 25'




?>

</body>
</html>
