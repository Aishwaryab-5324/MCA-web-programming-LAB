<?php
echo "sorting array<br>";
echo "-----------------<br/>";
$stud=array("nihi","sree","agna","riya","christy");
echo "displaying array using print_r()";
print_r($stud);
echo "<br>array in ascending order<br/>";
asort($stud);
print_r($stud);
echo "<br>array in descending order<br/>";
arsort($stud);
print_r($stud);

?>