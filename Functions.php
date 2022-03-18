<?php
$title = "FUNCTIONS";
include "includes/header.php";

?>
<body>
    <h1>FUNCTIONS</h1>

<?php
    
    function Writemessage(){
        echo "You are really a nice person.<br/>";
    }

    Writemessage();
    echo "<hr>";
    Writemessage();

    function Addnumbers($num1,$num2){
      $sum = $num1+$num2;
      echo "The sum of your numbers is $sum <br/>";
      
    }

    function returnproduct($num1,$num2){
        $prod = $num1*$num2;
        return $prod;
    }

    Addnumbers(3,4);
    $return_val = returnproduct(10,200);
    echo "The product of your numbers is ".$return_val. "<br>";

    
?>
<?php

require "includes/footer.php";

?>