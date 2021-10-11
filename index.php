<?php

// First Labour : Heracles vs Nemean Lion   <link href="style.css" rel="stylesheet" type="text/css">
// use your Figher class here
require_once ('src/Fighter.php');

$heracles = new Fighter('👨 Hercules', 20 , 6);
$lionDeMenes = new Fighter('🎃 Lion de Némée', 11 , 13);

//echo $heracles->getName() . " " . $heracles->getLife() . " " . $heracles->getStrength() . " " . $heracles->getDexterity();
//echo $lionDeMenes->getName() . " " . $lionDeMenes->getLife() . " " . $lionDeMenes->getStrength() . " " . $lionDeMenes->getDexterity();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <title>My test page</title>

</head>

<body>
    <h1>Bienvenu dans la bagare !</h1>
    <p><?php echo $heracles->getName() . " " . $heracles->getLife() . " " . $heracles->getStrength() . " " . $heracles->getDexterity() ?> </p>
    <p><?php echo $lionDeMenes->getName() . " " . $lionDeMenes->getLife() . " " . $lionDeMenes->getStrength() . " " . $lionDeMenes->getDexterity() ?> </p>

<?php
$numberRound = 1;
while (($heracles->getLife() > 0) && ($lionDeMenes->getLife() > 0)) {
    ?>
    <p><?php echo "⏱️ Round : " . $numberRound;?></p>
    <?php
    $heracles->fight($lionDeMenes);
    ?>
    <p><?php echo $heracles->getName() . " 🗡️ " . $lionDeMenes->getName() . " 💙 " . $lionDeMenes->getName() . " : " . $lionDeMenes->getLife()?> </p>
    <?php
    $lionDeMenes->fight($heracles);
    ?>
    <p><?php echo $lionDeMenes->getName() . " 🗡️ " . $heracles->getName() . " 💙 " . $heracles->getName() . " : " . $heracles->getLife()?> </p>
    <?php $numberRound++;
}
if ($heracles->getLife() > 0) {
    ?>
    <h2><?php echo "💀 " . $lionDeMenes->getName() . " is dead";?> </h2><br>
    <h2><?php echo "🏆 " . $heracles->getName() . " win (💙 : " . $heracles->getLife() . ")";?> </h2><br>
    <?php
} else {
    ?>
    <h2><?php echo "💀 " . $heracles->getName() . " is dead";?> </h2><br>
    <h2><?php echo "🏆 " . $lionDeMenes->getName() . " win (💙 : " . $lionDeMenes->getLife() . ")";?> </h2><br>
    <?php
}
?>
</body>

</html>

