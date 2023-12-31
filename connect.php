<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $Admission_Number = $_POST['Admission_Number'];
    $Name = $_POST['Name'];
    $Course = $_POST['Course'];
    $Year_of_Admission = $_POST['Year_of_Admission'];

$con = new mysqli('localhost','root','','students');

if ($con)
{
   // echo"connection successful";
   $sql="insert into studentdb (Admission_Number,Name,Course,Year_of_Admission)values('$Admission_Number','$Name','$Course','$Year_of_Admission')";

   $result=mysqli_query($con,$sql);
   if($result)
   {
    //echo"Data Inserted successfully";

    echo"<script> alert('Data Inserted successfully');</script>";
   }
   else
   {
    die(mysqli_error($con));
   }
}
else
{
    die(mysqli_error($con));
}

}
?>
