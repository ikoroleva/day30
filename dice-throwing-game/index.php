<?php

require_once 'Dice.php';

$diceNum = 0;
$sizeNum = 0;

//var_dump($_POST);

if (!empty($_POST['diceNum']) 
    && is_numeric($_POST['diceNum'])) {
        $diceNum = $_POST['diceNum'];
}

$dices = [];

if(!empty($_POST['sizeNum'])) {
    $sizeNum =  $_POST['sizeNum'];
    for($i=0; $i<$diceNum; $i++) {

        $dices[$i] = new Dice($sizeNum);
        $dices[$i]->roll();
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice-throwing game</title>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="post">
        <div class=number_of_dice>
            <label for="diceNum">Number of dice: </label>
            <input type="number" name="diceNum" style="width: 38px" value="10"/>
        </div>
        <br>
        <div class=number_of_sides>
            <label for="dice">Number of sides: </label>
            <select name="sizeNum">
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="10">10</option>
                <option value="20">20</option>
            </select>
        </div>
        <br>
        <button type="submit">Dice</button>
    </form>
    <br>
    <div style="display: flex; align-items: center; flex-wrap:wrap;">
       
    <?php foreach ($dices as $dice) : ?>
        <span class="dice_result" style="display:flex; justify-content: center; align-items: center; border: 1px solid; margin: 10px; font-family: 'Courier Prime', monospace; height: 40px; width: 40px">
            <?= $dice ?>
    </span>
    <?php endforeach; ?>
    </div>
    
</body>
</html>