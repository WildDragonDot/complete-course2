<!-- Post Method -->

<?php

if($_POST){
    $list=array("ReactJs","MySQL","Django","Python","WebDev");
    $isAvailable=false;
    foreach($list as $value){
        if($value==$_POST['name']){
            $isAvailable=true;
        }
    }
    if($isAvailable){
        echo "This course is available";
    }else{
        echo "This course is not available";
    }
}


?>

<form method="post">
<h3>Enter the course name which u want.</h3>
<input type="text" name="name">
<input type="submit" value="submit">
</form>