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
include 'classes/Person.php';
$umut = new \classes\person("Umut", 18, "M");
$demirel = new \classes\person("Demirel",22, "M");
$demirel->setAge(24);
$demirel->setGender("M");
echo "\n" . $demirel->getGegevens();
?>
</body>
</html>
