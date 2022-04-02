<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <title>Form</title>
 
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <h1>List Of Courses  </h1>
<table width="80%" border="1">
    <thead>
        <tr>
            <th>Code course </th>
            <th> Name Course  </th>
            <th>Intructors  </th>
            <th colspan="2">Other</th>
        </tr>
    </thead>
    
 <tbody>
    <?php
require_once "database.php";
 
 $arrCourses= getAllData ();
 
 foreach($arrCourses as $k => $v){
    echo "<tr>";
    echo "<td>".$k."</td>";
    echo "<td>".$v['name']."</td>";
    echo "<td>".$v['instructors']."</td>";?>
    <td><a  href ="edit.php?id=<?= $k ?>" > <button class="">Edit</button> </a></td>
    <td><a href ="delete.php?id=<?= $k ?>" onclick="return confirm('Are you sure to  want to delete the data?');"><button class="delete">Delete</button></a> </td>
    <?php
    echo "</tr>";
}
?>
  </tbody>
</table>
<br>
<a href ="AddCourse.php" ><button class="add">Add new course</button></a>
</body>
</html>