<?php
$title = "IF-STATEMENT";
include "includes/header.php";

?>

<body>
    
<?php
echo "<h1> IF STATEMENT </h1>";

$grade = 50;

if($grade >= 50){
echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
}

else{
    echo "<h3 style = 'color: red'>YOU HAVE FAILED</h3>";
}

$grade = "B";
if($grade == "A"){
    echo "<h1>YOU ARE A SUPER STAR!</h1>";
}

elseif($grade == "B"){
    echo "YOU DID WELL!";
}

else{
    echo "<h1>YOU HAVE FAILED</h1>";
}
?>
<?php

require "includes/footer.php";

?>