<?php

function printDetails($title,$year)
{
	echo "<p>The film {$title} was released in {$year}</p>";
}

function convertToEuros(int $pounds)
{
	return $pounds*1.18;
}


function addTwoNumbers($num1,$num2)
{
	return $num1+$num2;
}


function getWinnersByContinent(string $continent)
{
	$matchingCountries=[];
	if($continent==="Europe"){
		$matchingCountries=["France","Germany","Spain","England","Italy"];
	}else if($continent==="South America"){
		$matchingCountries=["Argentina","Brazil","Uruguay"];
	}
	return $matchingCountries;
}


function getPositiveNumbers(array $arrOfNumbers)
{
	$matches = [];
	foreach($arrOfNumbers as $num){
		if($num>0){
			array_push($matches,$num);
		}
	}
	return $matches;
}


function filterImageFileNames(array $arrOfFileNames)
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

function isValidUserName(string $userName)
{
	if(strlen($userName)>=6){
		return true;
	}
	return false;
}

function printList(array $arrOfNumbers)
{
	echo "<ul>";
	foreach($arrOfNumbers as $num){
		echo "<li>{$num}</li>";
	}
	echo "</ul>";
}

function calcAverage(array $nums){
	$total=0;
	foreach($nums as $num){
		$total+=$num;
	}
	$avg = $total/count($nums);
	return $avg;
}
