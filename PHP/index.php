<?php


$servername="127.0.0.1:3308";
$username="root";
$password="";
$conn= mysqli_connect($servername,$username,$password,"stud2");

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connection successful";

$query = "INSERT INTO `info` (`email`, `password`) VALUES('tom@gmail.com', 'notebook')";
mysqli_query($conn,$query);

$query="SELECT * FROM info";
if($result=mysqli_query($conn,$query)){
    $row=mysqli_fetch_array($result);
    print_r($row);
    echo "<br>";
    echo "your email is ".$row[0];
    echo "<br>";
    echo "your password is".$row[1];
}
?>