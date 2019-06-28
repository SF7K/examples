<?php 

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


$lucie = new Warrior('Lucie');
$anto = new Ranger('Antolas');


// Characters attacking while both alive
while ($lucie->isAlive() && $anto->isAlive()) {
    // First Character attacking the 2nd
    echo $lucie->action($anto);
    // Check if target is alive
    if (!$anto->isAlive()) {
        echo '<br>';
        echo "$anto->pseudo est KO!";
        break;
    };
    echo '<br>';

    // Second Character attaking the first
    echo $anto->action($lucie);
    // Check if target is alive
    if (!$lucie->isAlive()) {
        echo '<br>';
        echo "$lucie->pseudo est KO!";
        break;
    };
    echo '<br>';
}
