<?php
session_start();

if(!empty($_POST['answer'])){

    $n = intval($_POST['answer']);

    if($_SESSION['v'] == $n){
        echo "Human!";
    } else{
        echo "Error!";
    }


} else{
    header("Location: index.php");
}

?>