<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php tutorial</title>
</head>
<body>
  <div class="container">
    This is my First php website
<?php
    define('PI', 3.14);
  echo "Hello world and this is printed using php";
  //single line comment
  /*
  This
  is
  multiline
  comment
  */

  $variable1 = 34;
  $variable2 = 45;
  echo $variable1;
  echo $variable2;

  ECHO $variable1 + $variable2;

  // operators in php
 
  // arithmetic operators
  echo " The value of variable1 + variable2 is";
  echo $variable1 + $variable2;
  echo"<br>";
  echo " The value of variable1 * variable2 is";
  echo $variable1 * $variable2;
  echo"<br>";
  echo " The value of variable1 / variable2 is";
  echo $variable1/$variable2;
  echo "<br>";
  //assignment operator
  $newVar = $variable1;
  $newVar -= 1;
  echo " The value of new variable is";
  echo $newVar;
  echo "<br>";

  // comparison operators
  // echo"<h1> Comparison Operators</h1>";
  echo "The value of 1==4 is  ";
  echo var_dump(1==4);
  echo "<br>";
  echo "The value of 1==4 is  ";
  echo var_dump(1!=4);
  echo "<br>";
  echo "The value of 1==4 is  ";
  echo var_dump(1>=4);
  echo "<br>";
  echo "The value of 1==4 is  ";
  echo var_dump(1<=4);
  echo "<br>";

  //increament/decreament operators
  echo --$variable1;
  echo "<br>";
  echo $variable1++;
  echo "<br>";
  echo $variable1;
  echo "<br>";
  echo $variable1--;
  echo "<br>";

  //logical operator 
  // ans(&&)
  // or(||)
  // xor
  // !

  // $myVar = (true or false);
  $myVar = (true) and (false);
  // $myVar = (false) and (false);
  echo"<br>";
  echo var_dump($myVar);

  
    // echo "Hello world again";
    // Data types in php 
    // 1. String
    // 2. Integer
    // 3. Float
    // 4.Boolean
    // 5. Array
    // 6.Object
    echo " <br> Data types<br>";
    $var = " This is a string";
    echo var_dump($var);
    echo"<br>" 

    // $var = 67;
    // echo var_dump($var);
    // echo"<br>";

    // $var = 67.1;
    // echo var_dump($var);
    // echo"<br>";

    // $var = true;
    // echo var_dump($var);
    // echo"<br>";

    // // $var = true;
    // echo var_dump($var);
    // echo "<br>";
    // echo PI;
     

    ?>
  </div>
</body>
</html>