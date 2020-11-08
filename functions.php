<!DOCTYPE html>
<html>
<head>
	<title>PHP Functions</title>
</head>
<body>
<?php
include "example-functions.php";
/*
1) The function printDetails() prints details about films.
a) Write a line of code that will call the printDetails() function
b) Make several function calls to output details of different films.
c) Modify the function so that you can pass a third argument that specifies the duration of the film.
*/

/*
2) The function convertToEuros() converts a value in pounds into euros.
a) Write a line of code that will call this function. Test it works by outputting the result using an echo statement.
*/

/*
3) The function addTwoNumbers() adds two numbers together and returns the result.
a) Write a line of code that will call this function. Test it works by outputting the result using an echo statement.
*/

/*
4) Look at the getWinnersByContinent() function. It accepts the name of a continent as an argument and then returns an array of countries from that continent that have won the World Cup.
a) Write a line of code that will call this function. Use a foreach loop output the elements of the returned array.
*/

/*
5) Look at the getPositiveNumbers() function. It accepts an array of numbers and returns only those numbers that are greater than zero.
a) Write a line of code that will call this function. Use a foreach loop output the elements of the returned array.
*/



/*
6) Look at the filterImageFileNames() function. It accepts an array of filenames and returns only those filenames that have a png, jpg or jpeg extension.
a) Write a line of code that will call this function. Using a foreach loop output the elements of the returned array.
*/



/*
7) Write your own function called isValidUsername(). The function should accept a single argument, a string, and return a value of true if the string 6 characters or more in length and false if it isn't. Have a look at http://php.net/manual/en/function.strlen.php for info on determining string length. Here's some example code that calls a isValidUsername() function. Uncomment this code code to check your function works.
*/

/*
$userA =  "khutton";
if(isValidUsername($userA)){
	echo "<p>Valid username</p>";
}else{
	echo "<p>Not a valid username</p>";
}
*/


/*
8) Write your own function called printList(). It should accept a single argument, an array, and output an HTML list, with each element in the array as an item in the list. It shouldn't return any values. Use this function to print out the returned values from getWinnersByContinent, getPositiveNumbers and filterImageFileNames.
*/

/*
9) Write a calcAverage() function. It should accept an array of numbers as input and return the average of all the numbers in the array. Here's some example code that calls a calcAverage() function. Uncomment this code code to check your function works.
*/

/*
$scores = [20,13,4,23,65];
$avg = calcAverage($scores);
echo "<p>The average score was {$avg}</p>";  //outputs ' The average score was 25'
*/



?>

</body>
</html>
