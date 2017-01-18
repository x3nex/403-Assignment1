<!-- Task 5 - Variable Content and Destruction -->

<?php

$name = 'Harry'; 
$age = 28;   
 
var_dump ($name); 
echo "<br/>";   
 
print_r ($name); 
echo "<br/>";   
 
var_dump ($age); 
echo "<br/>";  
 
$name = null;

var_dump($name);
echo "<br/>"; 

?>