<?php
$title = "DATE/TIME";
include "includes/header.php";

?>

<body>
    <h1>
        DATE-TIME-MANIPULATE
    </h1>

    <?php
    
    $datenow = getdate();
    echo "<p>Today's date is</p> ". $datenow["mday"]."/". $datenow['mon'].'/'. $datenow['year']. '<br>';
    echo time();
    
    
    
    ?>
<?php

require "includes/footer.php";

?>