<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $f1=$_POST['feedback1'];
    $f2=$_POST['feedback2'];
    $f3=$_POST['feedback3'];
    $f4=$_POST['feedback4'];
    $f5=$_POST['feedback5']; 
    $f6=$_POST['feedback6'];
        $servername="localhost";
        $username="root";
        $password="";
        $database="registration-quiz";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die("Sorry we are failed to connect");
        }
   
    $sql="INSERT INTO `feedback` (`feedback1`, `feedback2`, `feedback3`, `feedback4`, `feedback5`, `feedback6`) VALUES ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6');";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Feedback sent successfully";
    }else{
        echo "Not sent successfully";
    }
    }
?>