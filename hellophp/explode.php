<?php
$people = "Peter.jpg  Joe.png";

$tmp =  explode(".",$people);

print_r(end($tmp));

 echo "<br>";

$people2 = array("asdf", "jkl", "mnp");

$tmp2 = implode(' ', $people2);

print_r($tmp2);
