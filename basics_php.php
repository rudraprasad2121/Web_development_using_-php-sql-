<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP page.
    </div>
    <?php
    define("pi", 3.14); // it is a constant in php which is used to define a value which will not change.
        echo "<h1>hello ... it printed using php </h1>";
    //secret algorithm
    /*
        a
        b
        c
        d
    */
    $variable1 = 1;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;
    $sum = $variable1 + $variable2;
    echo "<h2>Sum is: $sum</h2>";
    // opperator in php 
    // Arithematic operators 
    echo $variable1 + $variable2;
    echo "</br>";
    echo $variable1 - $variable2;
    echo "</br>";
    echo $variable1 * $variable2;
    echo "</br>";
    echo $variable1 / $variable2;
    echo "</br>";
    // comparison operators
    echo "the value of 1==4 is: "; 
    echo var_dump(1 == 4); // it will return false,true, or null (it is a funtion which is us for give the type of a variable)
    echo "</br>";
    echo "the value of 1!=4 is: ";
    echo var_dump(1 != 4); 
    echo "</br>";
    echo "the value of 1>=4 is: ";
    echo var_dump(1 >= 4); 
    echo "</br>"; 
    echo "the value of 1<=4 is: ";
     echo var_dump(1 <= 4); 
    echo "</br>"; 
    // assignment operators
    $Newvar = $variable1;
    $Newvar += 5; 
    $Newvar *= 2; 
    echo "The value of Newvar is: $Newvar"; // so here 1stly it will run the + operation then multiply it .
    echo "</br>";
    
    // increment/decrement operators
     echo $variable1++;
     echo "</br>";
     echo "$variable1"; // it will increase the value of variable1 by 1
    // echo $variable1--; // it will decrease the value of variable1 by 1
    // echo ++$variable1;// it will increase the value of variable1 by 1
    // echo --$variable1; // it will decrease the value of variable1 by 1
   
    //logical operators
    // xor, !, and(&&), or(||) 
    // $myvar = (true and true);
    // $myvar = (false and true);
    // $myvar = (false and false);
    //$myvar = (true and false);

    // $myvar = (true or false);
     $myvar = (true xor false);
    
    echo "</br>";
    echo "The value of myvar is: ";
    echo var_dump($myvar); 
    echo "</br>";
    ?>
        <?php
    // Data types in PHP
    // 1. String
    // 2. Integer
    // 3. Float    
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. NULL
    echo "<h2>Data Types in PHP</h2>";
    $var = "This is a string";
    echo var_dump($var); // it will return the type of variable and its value
    echo "<br>";
    $var = 345;
    echo var_dump($var); // it will return the type of variable and its value
    echo "<br>";
    $var = 23.544;
    echo var_dump($var); // it will return the type of variable and its value
    echo "<br>";
    $var = true;
    echo var_dump($var); // it wil
    // l return the type of variable and its value
    echo "<br>";
    $var = ["This is a string", 34, 45.6, false];
    echo var_dump($var); // it will return the type of variable and its value
    echo "<br>";
    echo pi; // it will return the value of pi constant

    
    
    ?> 
</body>
</html>