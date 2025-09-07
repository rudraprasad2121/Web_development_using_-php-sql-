<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    padding: 10px;
}
.container{
    max-width : 80%;
    margin: auto;
    background-color:rgb(184, 118, 118);
}   
</style> 
<body>
    <div class="container">
    <H1>LETS LEARN ABOUT PHP</H1>
    YOUR PARTY STARTS:
    <BR>
    <?php
    $age = 65;
    if ($age>=18 and $age<=50) {
        echo "you can go to the party";
    }
        else if($age==7){
        echo "you are 7 yrs old";
    }
    else{
        echo "you cant go to the party";
    }
    echo "<br>";
    $languges= array("php", "python", "javascript", "java", "c++");
    // echo count($languges); // it will return the number of elements in the array
    // echo "<br>";
    // echo $languges[1];

    // loops in php
    $a = 1;
    while ($a < 11) {
        echo "<br> your age is $a";
        $a++;
    }

    // itteratin array using for while loop
    $a= 0;
    while ($a < count($languges)) {
        echo "<br> your languges is : $languges[$a]";
        $a++;
    }

    // itteratin array using for while loop
    $a= 0;
    do {
        echo "<br> THe value of a is ";
        echo $a;
        $a++;
    
    } while ($a <= 10); 
// for loop in php
    for ($a = 0; $a < 10; $a++) {
        echo "<br> The value of a from the for loop is : ";
        echo $a;
    }
    // foreach loop in php
    foreach($languges as $value ){
        echo "<br>the value from foreach loop is ";
        echo $value;
    }

    function print5(){
        echo "five<br>";
    }
    print5(); // calling the function
    print5(); // calling the function again
    print5();

    function print_number($number){
        echo "The number is: $number<br>";
    }
    print_number(5); // calling the function with argument 5
    print_number(10); // calling the function with argument 10
    ?>
    
    </div>
</body>
</html>