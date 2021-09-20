<!-- Get Method -->

<?php
 if(is_numeric($_GET['number']) && $_GET['number']>0 && $_GET['number']==round($_GET['number'],0)){
     $i=2;
     $isPrime=true;
     while($i<$_GET['number']){
         if($_GET['number']%$i==0){
             $isPrime=false;
         }
         $i++;
     }
     if($isPrime){
         echo "Given number is prime number";
     }else{
         echo "Given number is not a prime number";
     }
 }else{
     echo "Please enter a correct number";
 }




?>

<form action="">
<h3>Enter a number to check it is prime or not.</h3>
<input type="text" name="number">
<input type="submit" value="submit">
</form>