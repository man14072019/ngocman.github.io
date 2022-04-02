<?php

require "database.php";
if(isset($_POST['btnSua'])){
    $ccode = trim($_POST['code']);
    $cname = trim($_POST['name']);
    $avatar = trim('');
    $duration = trim($_POST['duration']);
    $credits = trim($_POST['credits']);
    $instrutors = trim($_POST['instructors']);
    $outline = trim($_POST['outline']);
    
    $edit = editData($ccode,$cname,$avatar,$duration,$credits,$instrutors,$outline);
    if($edit) {
        header("Location:index.php");
    }
    else {
        header("Location:edit.php?id=$ccode");
    }

}
?>

