<?php


if(isset($_REQUEST['submit'])){
    $con=mysqli_connect("localhost","root","","test");

    if (!$con)
    {
        echo"<div class='alert alert-warning'> Connection Error Please check </div>";
    }

    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    $sql="insert into mydata values('$name','$email','$subject','$message')";

    $r = mysqli_query($con,$sql);

    header("location:index.php");

}


?>