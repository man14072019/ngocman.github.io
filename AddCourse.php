<html>
<body>
    <h1> ADD NEW COURSE </h1>
    <form method = "post" action ="doAddCourse.php" >
    <lable for="course code"> Course code:</lable> 
    <input type="text" name="code" id="course code"/> <br/> <br/>
    <br/>
    <lable for="course name"> Course name:</lable> 
    <input type="text" name="name" size="40" id="course name"/> <br/> <br/>
    <br/>
    <lable for="credits"> Credits:</lable> 
    <input type="text" name="credits" size= "5"  id="credits"/> <br/> <br/>
    <br/>
    <lable for="duration">Duration:</lable> 
    <input type="number" name="duration"  id="duration" />  <br/><br/>
    <br/>
    <lable> Please choose list of intructors below: </lable> <br/>
    <input type="checkbox" name="its[]" value="Aliba HJ"/> Aliba HJ <br/>
    <input type="checkbox" name="its[]" value="Jame Hot"/> Jame Hot <br/>
    <input type="checkbox" name="its[]" value="Taliba Adam"/> Taliba Adam <br/>
    <input type="checkbox" name="its[]" value="John Ken"/> John Ken <br/> <br/>
    <br/>
    <lable for="outlines">Outlines:</lable> <br/>
    <textarea name="outline" id="outlines" rows="10" cols="80"> </textarea> <br/><br/>
    <input type="Submit" name="insert" value="Submit"/> 
</body>
</html>