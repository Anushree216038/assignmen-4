<?php
$alphabets = array("q","w","a","z","e","f","r","c","b","d");
sort($alphabets);

$alength = count($alphabets);
for($x = 0; $x < $alength; $x++) {
  echo"$alphabets[$x] \n";
 
}
?>