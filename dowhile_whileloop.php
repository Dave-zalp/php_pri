<?php
$title = "DO-WHILE-LOOP";
include "includes/header.php";

?>

<body>
    <h1>DO-WHILE/ WHILE LOOP</h1>
    <?php
    
    echo "<h1> WHILE LOOP</h1>";
    $grade = 0;
    while($grade < 10){
        echo "<h2>Grade is Less than 10</h2>";
        $grade++;
    }
    
    echo "<h3>LOOP BROKEN!!</h3>";
    ?>

    <?php
    
    echo "<h1>DO WHILE LOOP</h1>";

    $grade = 0;

    do{
        echo "<h2>I AM A DO-WHILE LOOP</h2>";
        $grade ++;
    }while($grade<10)
    
    ?>
<?php

require "includes/footer.php";

?>