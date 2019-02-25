<?php
if(isset($_GET["id"]))
{
   $conn = mysqli_connect("localhost","root","password","shule");
       extract($_GET);
        $sql="delete from employees where id=$id";
        mysqli_query($conn,$sql) or die('error');

}
header("location:fetch.php");