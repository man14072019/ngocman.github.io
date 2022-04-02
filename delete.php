<?php
require_once"database.php";
$id= $_GET['id'];
$result=  deleteCourse($id);
if($result){
    header('Location:index.php');
}
else {
    echo 'No delete!';
}
?>