<?php
$title =  "STRING=MANIPULATION";
include "includes/header.php";

?>
<body>
    <h1>STRING-MAIPULATE</h1>

    <?php
    
    $phrase1 = "Student who came late";
    $phrase2 = "In class, sit down.";
    $name = "trevoh williams";

    echo $phrase1 . ' '. $phrase2 ."<br>"; //Concatenation.
    
    //STRING TRANSFORMATION.
    echo ucwords($name). "<br>";
    echo ucfirst($name). "<br>";
    echo strtoupper($name). "<br>";
    echo str_repeat('a',10). "<br>";
    echo str_repeat(strtoupper("a"),10). "<br>";
    echo substr($name, 5, 10). "<br>";
    echo strlen($name). "<br>";
    echo str_replace("williams","Opara",$name);
    

    ?>
<?php

require "includes/footer.php";

?>