<?php


include 'person.php';
$dhiradj = new Persoon("Dhiradj", 18, "M"); 
$pinda = new Persoon("Pinda", 24, "V");
$tom = new Persoon("Tom", 20, "M");
$marianne = new Persoon("Marianne", 25, "V");

echo "<br>" . "\n De gevens van Dhiradj zijn " . $dhiradj->getLeeftijd() . " " .   $dhiradj->getGeslacht() . "<br>"; 
echo "\n De gevens van Pinda zijn " . $pinda->getLeeftijd() . " " .   $pinda->getGeslacht() . "<br>"; 
echo "\n De gevens van Tom zijn " . $tom->getLeeftijd() . " " .   $tom->getGeslacht() . "<br>"; 
$marianne->setLeeftijd(26);
echo "\n De gevens van Marianne zijn " . $marianne->getLeeftijd() . " " .   $marianne->getGeslacht(); 
?>