<?php
$title = "ARRAYS";
include "includes/header.php";

?>

<body>
    <h1>ARRAYS-PHP</h1>
    <?php
    
    // A variable
    $num = 3;

    //an array
    //Only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,11,22,33,44,55,66,776);

    echo "The size of the array is". count($numbers);

    for($count=0; $count<count($numbers); $count++){
        echo "<p>$numbers[$count]</p>";
    
    }

    ?>
<?php

require "includes/footer.php";

?>