<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php tutorial</title>
</head>
<style>
  *{
    margin:0;
    padding :0;
    box-sizing:border-box;
  }
  .container{
    max-width:80%;
    background-color: rgb(225, 149, 149);
    margin: auto;
    padding: 23px;
  }
</style>
<body>
  <div class="container">
    <h1> Lets learn about PHP</h1>
    <p> Your party status is here: </p>
    This is a container
    <?php
$age = 7;
if($age>18){
  echo" You can go to party";
}
else if($age==7){
  echo" You are 7 years old";
}
else{
  echo" You can not go to party";
}

$languages = array("Python", "C++", "php", "NodeJs");
echo count($languages);
echo $languages[0];

//loops in php
$a = 0;
while($a<=10){
  echo "The value of a is: ";
  echo $a;
  $a++;
}

//iterating arrays in PHP using while loop
$a = 0;
while($a < count($languages)){
  echo"<br> The value of language is : ";
  echo $languages[$a];
  $a++;
}

//iterating arrays in PHP using do-while loop
$a = 0;
do{
  echo "<br> The value of language is : ";
  echo $a;
  $a++;
}while($a<10);

//for loop
for ($a=0; $a <10; $a++ ){
  echo"<br> The value of a from the for loop is :";
  echo $a;
}

//for each loop
foreach($languages as $value){
  echo "<br> The value from foreach loop is :";
  echo $value ;
  echo"<br>";
}

//function
function print5(){
  echo"FIVE";
  echo"<br>";
}
print5();
print5();
print5();
print5();

function print_number($number){

  echo"<br> Your number is ";
  echo $number;
}
print_number(45);
print_number(435);
print_number(4);

    ?>



    </div>;
</body>
</html>