<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>person</title>
</head>
<body>
<?php

use classes\Person;

include 'classes/Person.php';
include 'classes/Docent.php';
//$umut = new \classes\person("Umut", 18, "M");
//$demirel = new \classes\person("Demirel",22, "M");
$demirel = new Person("demirel", 22, "M", true, 8.2);
echo "\n " . $demirel->getGegevens();
echo "<br>";
$tom = new Person("Tom", 25, "M", true, 6.5);
$tom->setAge(26);
echo "\n" .$tom->getGegevens();
echo "<br>";
$docent1= new \classes\Docent("geert", 26, "M", "NL");
echo "\n " . $docent1->getInfo();

?>
</body>
</html>
