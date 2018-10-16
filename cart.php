<?php
session_start();
?>
<?php require 'inc/head.php'; ?>


<?php
    foreach($_SESSION['carts']['name'] as $names=>$name){
        echo"<li>" . $name ."</li>";
    }





require 'inc/foot.php';
?>

















