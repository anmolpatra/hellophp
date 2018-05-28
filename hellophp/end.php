<?php

 $people = array("Peter.jpg", "Joe.jpg", "Glenn.jpg", "Cleveland.jpg");

 echo current($people) . "<br>";
 
  print_r(explode(".",end($people)));
  
  echo "<br>";

 #$var = explode(".", "ASDF.jpg");

 #print_r($var);
 
 echo "<br>";
 
 $file_name = "ASDF.jpg.png";
 
 $tmp = explode('.', $file_name);
 
 print_r($tmp);
 
 echo "<br>";
 
 $file_extension = strtoupper(end($tmp));
 
 print_r($file_extension);

?>