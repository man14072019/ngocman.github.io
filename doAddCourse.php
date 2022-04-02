<?php

require "database.php";
$instructors=$_POST['its'];
    $tor="";
    foreach( $instructors as $tor1){
        $tor.=$tor1.",";
    }
insertCourse($_POST['code'],$_POST['name'],'',$_POST['duration'],$_POST['credits'],$tor,$_POST['outline']);
header("Location:index.php");


?>

