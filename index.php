<!-- simple string output -->

<?php

 echo"hello world";

?>

<!-- variable,concatination -->

<?php

$jeba = 5;
$_name="JEBA";
$name2="FAWJIA";

echo"hello world"." ".$jeba."</br>";
echo"My name is:"." ".$jeba."</br>";
echo"My name is:"." ".$_name." ".$name2." "."Dorothy</br>";
$name2="rina";

echo"My name is:"." ".$_name." ".$name2." "."Dorothy";


?>

<!-- arithmatic operators -->

<?php

$a = 5;
$b= 6;
$c= $a+$b;
$e = $a*$b;
$f = $a/$b;
$g = $a%$b;


echo"a+b:"." ".$c."</br>";
echo"a-b:"." ".$a-$b."</br>";
echo"a*b:"." ".$e."</br>";
echo"a/b:"." ".$f."</br>";
echo"a%b:"." ".$g."</br>";
$a ++;

echo"a++:"." ".$a."</br>";
$a--;
echo"a--:"." ".$a."</br>";


?>



 <!-- comparison operators -->

 <?php
$a = 5;
$b= 6;

var_dump($a==$b);
var_dump($a>$b);
var_dump($a<$b);
var_dump($a!=$b);
var_dump($a>=$b);
var_dump($a<=$b);




 ?>
 <!-- logical operators -->

 <?php
$a = 1;
$b= 1;

var_dump($a&&$b);
var_dump($a||$b);
$a = 1;
$b= 0;

var_dump($a&&$b);
var_dump($a||$b);
var_dump(!$a);
var_dump(!$b);

 ?>
 <!-- conditional or ternary operators -->

 <?php

$a = 9;
$a <3? $value= "yes": $value="no";

var_dump($value);

 ?>
 <!-- assignment operators -->

 <?php

$a = 9;
$b= 2;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
echo $a;


 ?>


<!-- conditional statement  -->

<?php
$age=14;
if($age==14){
      echo"your age is 14";
}

$age=15;
if($age==14){
      echo"your age is 14";
}else {
      echo"your age is not 14";
}

$age=15;

if($age>14 && $age<65){
      echo"your age is above 14";
}else {
      echo"your age is not 14";
}
$age=15;

if($age>16 || $age<65){
      echo"your age is above 14";
}else {
      echo"your age is not 14";
}
$age=15;

if($age>14 && $age<65){
      echo"your age is above 14";
}
else if($age==18 && $age<65){
      echo"your age is  15";
}
else {
      echo"no age display";
}
$age=15;

if($age>17 && $age<65){
      echo"your age is above 14";
}
else if($age==15 && $age<65){
      echo"your age is  15";
}
else {
      echo"no age display";
}
$age=15;

if($age>15 && $age<65){
      echo"your age is above 14";
}
else if($age==18 && $age<65){
      echo"your age is  15";
}
else {
      echo"no age display";
}


//nested if-else 

$age=15;

if($age>15 && $age<65){
      echo"your age is above 14";
}
else if($age==15){
      if($age<65){
            echo"your age is below 65 and equale to 15";

      }
      else {
            echo"your age is not  below 65 but  equale to 15";

      }
}
else {
      echo"no age display";
}



$age=15;

if($age>15 && $age<65){
      echo"your age is above 14";
}
else if($age==15){
      if($age<14){
            echo"your age is below 65 and equale to 15";

      }
      else {
            echo"your age is not  below 65 but  equale to 15";

      }
}
else {
      echo"no age display";
}


?>




 <!-- array  -->
 <!-- three types of array : index array, multidimentional array and assosiative arrary -->


  <?php

 //index array

$name =["jeba","rina","fawjia","tina"];

//adding value in an array
$name[]="tina";

echo"<pre>";
print_r($name);
echo"</pre>";


//assosiative arrary

$name =array(
      "name"=>"jeba",
      "age"=>14,
      "occupation"=>"engineer",
      

);
//nested assosiative array or multidimentional array in assosiative array
$name =array(
      "name"=>"jeba",
      "age"=>14,
      "occupation"=>"engineer",
      array("jeba","rina","fawjia","tina"),
      array(
            "name"=>"jeba",
            "age"=>14,
            "occupation"=>"engineer",
            array("jeba","rina","fawjia","tina")
            
      )

);
 //adding value in an array

$name["status"]="active";
echo"<pre>";
print_r($name);
echo"</pre>";

 ?> 

 <!-- function -->
 <!-- 2 types of function:pre-defiened functionn and user- defined  function -->


 <?php

 //pre-defined function

print_r();

//user-defined function

function jeba(){
      echo"My nemae is jeba";

}
jeba();


function add($data){
      echo"add:".$data+1;
}

add(1);


function adition($data,$val){
      $c= $data+$val;
      //echo"add:".$data+$val;
      echo"add:".$c;
      return;
      echo"Hello";
}

adition(1,4);

//funtion a return er por kono kichu execute hoy na 

 ?>

 


  <!-- array function  -->

  <?php
$arr = array(
      "name"=> "jeba",
      "age"=> "120",
      "proffesion"=>"teachwer"
);
$arr1 = array(
      "jeba","120","teachwer"
);


var_dump(is_array($arr));

print_r($arr);
$x = 5;

if(is_array($x)){
      echo"this is an array";

}
else{
      echo"this is not an array";
}

echo array_search("jeba",$arr);
print_r(array_slice($arr,2));


echo"<pre>";
print_r(array_chunk($arr,2));
echo"</pre>";


print_r(array_pop($arr));
array_push($arr,"ggggg");
print_r($arr);

print_r(array_keys($arr));
var_dump(array_key_exists("age",$arr));
echo count($arr);

print_r(array_count_values($arr));


$merge= array_merge($arr1,$arr1);

print_r($merge);
  ?>

<!-- pow() and sqrt() function -->
<?php

echo pow(2,3);

echo sqrt(4);
?>
<!-- ceil() and floor() function -->
<?php
$a=1.4;
echo ceil($a);

echo floor($a);
?>
<!-- rand() function -->
<?php
echo rand(100,200);

?>
<!-- substr() function -->
<?php

$name= "jeba fawjia";
echo substr($name,3);
$name= "jeba fawjia hgjhdbfjkgrhgkjtrelkgkjtlkgkj";
echo substr($name,3,15);

?>
<!-- str_word_count(), strlen(),str_repeat function -->
<?php

$name= "jeba fawjia";
echo str_word_count($name)."</br>";
echo strlen($name)."</br>";
echo str_repeat($name,3);

?>
<!-- strrev() function -->
<?php

$name= "jeba fawjia";
echo strrev($name)."</br>";


?>
<!-- str_replace() function -->
<?php

$name= "jeba fawjia";
echo str_replace("jeba","dorothy",$name)."</br>";
?>

<!-- case changing mathode -->
<!-- strtolower(), strtoupper()and lcfirst() ,ucwords(),ucfirst() function -->
<?php

$name= "jeba Fawjia";
echo strtolower($name)."</br>";
echo strtoupper($name)."</br>";
echo lcfirst($name)."</br>";
echo ucfirst($name)."</br>";
echo ucwords($name)."</br>";
?>
<!-- implode(), explode() function -->
<?php

$arr=[1,2,3,45,4];
echo implode("||",$arr)."</br>";
$name= "jeba Fawjia";
echo "<pre>";
print_r(explode(" ",$name));
$name= "jeba Fawjia gfgfbgfh grth";
echo "<pre>";
print_r(explode(" ",$name,2));

?>

<!-- while loop  -->

<!-- while loop is a entry control loop -->
<?php

$i=1;
$sum=1;
while($i<=10){

      while($sum<2){
            $sum++;
           
      }
      echo $i."x".$sum."=".$i*$sum."</br>";
      $i++;
}

//another solution
$i=1;
$sum=2;
while($i<=10){

      
      echo $i."x".$sum."=".$i*$sum."</br>";
      $i++;
}


?>
<!--do-  while loop  -->

<!-- do while loop is a exit control loop -->
<?php

$i=0;
do{
      echo $i."printed"."</br>";
      $i++;  
}while($i<5);


?>
<!--for loop  -->

<?php

for($i=0;$i<5;$i++)
{
      echo $i."printed value"."</br>";
};


?>
<!--foreach loop  -->
<!-- foreach array te use hoy -->

<?php

$arr=[
      "name"=> "jenb",
      "age"=> "12",
      "course"=> "graphics"
];

foreach($arr as $data => $info)
{
      echo "printed value:"." ".$data." "."and"." ".$info."</br>";
};


?>


<!--break statement -->
<?php

$i = 0;
  

while($i<10){
      if($i==7){
            break;
      }
      echo $i;
$i++;
}

?>
<!--continue statement -->

<?php

for($i = 0;$i<10;$i++){
      if($i%2==0){
            continue;
            
      }
      echo $i;
}
for($i = 0;$i<10;$i++){
      if($i%2!=0){
            continue;
            
      }
      echo $i;
}

?>
<!--Switch statement -->


<?php

$i=0;

switch($i){
      case 2:
            echo "value 2";
            break;
      case 0:
            echo "value 0";
            break;
      
      default:
            echo "value nothing";
      
}
switch($i){
      case 2:
            echo "value 2";
            break;
      case 3:
            echo "value 0";
            break;
      
      default:
            echo "value nothing";
      
}

?> 

 <!-- recursion using function -->

<?php

 function Fawjia(){
      echo "hello";
      
      Fawjia();
 }

function countNumber($data){

      if($data<=10){


            echo $data."</br>";

            $data++;
            countNumber($data);

      }else{
            return;
      }
}
 

countNumber(2);


?>
