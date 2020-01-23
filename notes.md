# Functions

A function is simply group of statements that we give a name to. Here's an example:

```php
function display_details(){
    echo "<ul>";
    echo "<li>Jane Jones</li>";
    echo "<li>19</li>";
    echo "<li>Female</li>";
    echo "</ul>";
}

```

The function name should always describe what the function does e.g. this function, *display_details*, prints someone’s details.

## Calling a function

To run the code is a function we write the name of the function followed by  parentheses(curved brackets).

```php
function display_details(){
    echo "<ul>";
    echo "<li>Jane Jones</li>";
    echo "<li>19</li>";
    echo "<li>Female</li>";
    echo "</ul>";
}
display_details(); //this line of code calls the function
```

## Arguments and parameters
We can pass data to a function, we do this using an argument.
```php
function display_details($name){
    echo "<ul>";
    echo "<li>$name</li>";
    echo "<li>19</li>";
    echo "<li>Female</li>";
    echo "</ul>";
}

display_details("Sarah Smith");
```
Outputs:
```html
<ul>
<li>Sarah Smith</li>
<li>19</li>
<li>Female</li>
</ul>
```
When the function is called, the text 'Sarah Smith' (the argument) is assigned to the variable *$name* (the parameter).
Arguments allow us to customise a function. The function can produce a different output each time we call it.

```php
function display_details($name){
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>19</li>";
    echo "<li>Female</li>";
    echo "</ul>";
}

display_details("Sarah Smith");
display_details("Sadiah Iqbal");
display_details("Ania Kowalski");

```
Outputs:
```html
<ul>
<li>Sarah Smith</li>
<li>19</li>
<li>Female</li>
</ul>

<ul>
<li>Sadiah Iqbal</li>
<li>19</li>
<li>Female</li>
</ul>

<ul>
<li>Ania Kowalski</li>
<li>19</li>
<li>Female</li>
</ul>

```

### Multiple arguments
We can use several arguments. We separate the arguments and parameters with commas.

```php
function display_details($name, $age, $gender){
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>{$age}</li>";
    echo "<li>{$gender}</li>";
    echo "</ul>";
}
display_details("Sarah Smith", 21, "Female");

```
Outputs:
```html
<ul>
<li>Sarah Smith</li>
<li>21</li>
<li>Female</li>
</ul>
```

### Optional arguments

We can make arguments optional by providing a default value for the parameter. In this example *$gender* is given a default value of "Female".

```php
function display_details($name, $age, $gender="Female"){
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>{$age}</li>";
    echo "<li>{$gender}</li>";
    echo "</ul>";
}
display_details("Bill Brown",21,"Male");
display_details("Sarah Smith",21);
```
In the second function call, a third argument isn't specified so it defaults to *female*.

```html
<ul>
<li>Bill Brown</li>
<li>21</li>
<li>Male</li>
</ul>

<ul>
<li>Sarah Smith</li>
<li>21</li>
<li>Female</li>
</ul>
```

## Type declarations
In recent versions of PHP it is possible to specify the data type of parameters. Here's an example:

```php
function hasPassed(int $mark){
    if($mark>=40){
        echo "Passed";
    }else{
        echo "Failed";
    }
}
hasPassed(45);
```
* The keyword *int* before the parameter *$mark* specifies mark must be an integer. If the argument is a different data type e.g. a *string* PHP will throw an error. You can look up the valid types ( including string, array, bool, int) at http://php.net/manual/en/functions.arguments.php.
* It is considered good practice to use type declarations as it makes it clear in your code what type of data to pass to a function.

## Arrays as arguments
We can pass any type of variable as an argument. This example uses an array.
```php
function printArrayAsList(array $arr)
{
    echo "<ul>";
    foreach($arr as $item){
        echo "<li>";
        echo $item;
        echo "</li>";
    }
    echo "</ul>";
}
printArrayAsList( ["Sarah","Sadia","Ania","Bill"] );
```
Outputs:
```html
<ul>
<li>Sarah</li>
<li>Sadia</li>
<li>Ania</li>
<li>Bill</li>
</ul>
```

## Returning values
As well accepting 'input' via parameters functions can also produce 'output'.
They can send data back using a *return* statement.
```php
function doubleIt(int $num)
{
        $double=$num*2;
        return $double;
}
$num = 4;
$numDoubled = doubleIt($num);
echo $num." doubled is ".$numDoubled; //4 doubled is 8
```

The return statement sends a value back to the point in the script the function was called from. In this next example it is used in an *if* statement.

```php
function old_enough($age)
{
        if($age>=17){
            return true;
        }else{
            return false;
        }
}
$age=21;
if(old_enough($age)){
        echo "You're old enough to drive";
}
```

Here's another example that tells us if a file is an image.

```php
function isImage($filename)
{
    $fileExt = substr($filename, strrpos($filename, '.') + 1); //gets the filename extension from the string e.g. png
    if($fileExt==="png" || $fileExt==="jpg" || $fileExt==="jpeg"){
        return true;
    }
    return false;
}

var_dump(isImage("test.png")); //true
var_dump(isImage("somefile.jpeg")); //true
var_dump(isImage("anotherfile.php")); //false
var_dump(isImage("anyfile.jpg")); //true

```
Returning values is often a better idea than running echo statements from within a function. It allows the function to be used more flexibly. Here's the example from earlier re-written using a *return* statement.

```php
function hasPassed(int $mark){
    if($mark>=40){
        return true;
    }else{
        return false;
    }
}
if(hasPassed(45)){
    echo "Well done";
}else{
    echo "Hard luck";
}
```

## Returning arrays
We can return any type of data we want. This example returns an array.
```php
function searchBandsByGenre($searchTerm)
{
    $bands=[
        ["name"=>"The Rolling Stones", "formed"=>1962, "genre"=>"Rock"],
        ["name"=>"The Beatles", "formed"=>1960, "genre"=>"Rock"],
        ["name"=>"The Wu-Tang Clan", "formed"=>1992, "genre"=>"Hip-hop"],
        ["name"=>"Busted", "formed"=>2000, "genre"=>"Pop"],
    ];
    $matches=[];
    foreach($bands as $band){
        if($band["genre"]===$searchTerm){
            $matches[]=$band;
        }
    }
    return $matches;
}
$matchingBands = searchBandsByGenre("Pop");

foreach($matchingBands as $band)
{
    echo "<p>".$band["name"]."</p>";
}

```

## Variable scope
Variables declared inside a function are only available to that function
```php
function getName(){
    $name="Fred";
    echo $name;
}

getName(); //outputs Fred
echo $name; //causes an error : undefined variable
```
* By default variables declared outside a function aren’t available to the function
* We need to declare the variable as *global* for the function to recognise it
```php
$name="Mike";
function tellMeStuff(){
    global $name; //need to declare as global to access the existing $name variable
    echo $name; //outputs Mike
}
tellMeStuff();
```
* Global variables are often considered bad programming practice as they tie the function to only being used in the presence of the global variables
* Ideally, functions should work independently. They can then be used in any application without changing the code (the principle of 'Loose coupling')
