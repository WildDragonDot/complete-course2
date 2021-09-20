<?php

$myArray=array("Php","ReactJs","Django","MySQL");
for($i=0;$i<sizeof($myArray);$i++){
    echo $myArray[$i];
    echo "<br>";
}


foreach($myArray as $key=>$value){

    echo "You have chosen".$value."course";
}
for($j=1;$j<20;$j++){
    echo $i."<br>";
}

?>