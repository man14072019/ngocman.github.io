<html>
<body>
<head>
    <meta charset ="UTF-8">
    <title>editcourse</title>

</head>
<?php
require_once "database.php";
if(isset(($_GET['id'])))
    $id= $_GET['id'];
$arr = getDataBy($id)[$id];
?>
    <h1> EDIT COURSE </h1>
    <form method = "post" action ="doedit.php" >
    <lable for="course code"> Course code:</lable> 
    <input type="text" name="code" id="course code"  value="<?=$id?>"/> <br/> <br/>
    <br/>
    <lable for="course name"> Course name:</lable> 
    <input type="text" name="name" size="40" id="course name" value="<?=$arr['name']?>" /> <br/> <br/>
    <br/>
    <lable for="credits"> Credits:</lable> 
    <input type="text" name="credits" size= "5"  id="credits" value="<?=$arr['credits']?>" /> <br/> <br/>
    <br/>
    <lable for="duration">Duration:</lable> 
    <input type="number" name="duration"  id="duration"   value="<?=$arr['duration']?>" />  <br/><br/>
    <br/>
    <lable> Instructors: </lable> <br/>
    <input type="text" name="instructors"  id="instructors"   value="<?=$arr['instructors']?>" />  <br/><br/>
    <br/>
    <lable for="outlines">Outlines:</lable> <br/>
    <textarea name="outline" id="outlines" rows="10" cols="80"> </textarea> <br/><br/>
    <input type="Submit" name="btnSua" id="btnSua"value="Save"/> 
    <input type="button" value="Exit" onclick="location='index.php'" />
</body>
</html>