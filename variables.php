<?php
$name = "Kusum Singh";
$netWorth = 200 ;

echo "This is $name and <br> her income is $netWorth<br>";

/*DATA TYPES
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//var_dump() is used to check the type of variable ans also to display its value with it

//Boolean
$x = true;
$is_friend = false;

echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
echo var_dump($name);
echo "<br>";
 $friends = array("Neha","jia","akshita");
 echo var_dump($friends);
 echo "<br>";

 echo $friends[0];
 echo "<br>";
 echo $friends[1];
 echo "<br>";
 echo $friends[2];
 echo "<br>";

 $name = NULL;
 echo var_dump($name);


?>