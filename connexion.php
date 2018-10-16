<?php
if(!empty($_POST['loginname'])){

    $_SESSION['loginname'] = $_POST['loginname'] ;
    header('Location:index.php');
}
