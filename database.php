<?php
 function connect(){
     $conn = new
     PDO('mysql:host=localhost;port=3306;dbname=coursemanagement','root','');
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $conn;
 }
 function getAllData($sql=null){
     if ($sql==null)
        $sql = "select * from courses";
        $conn = connect();
        $stmt = $conn->query($sql);
        $arr = null;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arr[$row['ccode']]=[
                'name' => $row['cname'],
                'avatar' => $row['avatar'],
                'duration' => $row['duration'],
                'credits' => $row['credits'],
                'instructors' => $row['instructors'],
                'outline' => $row['outline']
            ];
        }
        return $arr;
 }
 function insertCourse($code,$name,$avatar,$duration,$credits,$instructors,$outline){
    $outline = empty($_POST['outline'])?"Updating:":$_POST['outline'];
    
    $sql = "INSERT INTO Courses(ccode,cname,avatar,duration,credits,instructors,outline)
    VALUES 
    ($code,'$name','$avatar',$duration,$credits,'$instructors','$outline') ";
    $conn = connect();
    $conn ->exec($sql);
    return true;

}
function deleteCourse($ccode){
    $sql = "delete from courses where ccode =$ccode";
    $conn = connect();
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    }
    catch (PDOExeception $e){
        echo "Error updating record:" . $e->getMessage();
        return false;

    }
    
    return true;
}
function getDataBy($id){
    $sql = "SELECT * from courses where ccode =$id";
    $conn = connect();
    $result = $conn->query($sql);
    $arr=null;
    while ($row =$result->fetch(PDO::FETCH_ASSOC)){
        $arr[$row['ccode']]=[
            'name' => $row['cname'],
            'avatar' => $row['avatar'],
            'duration' => $row['duration'],
            'credits' => $row['credits'],
            'instructors' => $row['instructors'],
            'outline' => $row['outline']
        ];
    }
    return $arr;
    }
function editData($ccode,$cname,$avatar,$duration,$credits,$instructors,$outline){
    $sql ="UPDATE courses SET  cname ='$cname', avatar='',duration='$duration',credits='$credits', instructors ='$instructors', outline ='$outline' WHERE ccode=$ccode";
    echo $sql;
    $conn = connect();
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    }
    catch (PDOExeception $e){
        echo "Error updating record:" . $e->getMessage();
        return false;

    }
    
    return true;

}
?>