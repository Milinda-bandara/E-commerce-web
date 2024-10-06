<?php 
include('connection.php');

 $id = $_GET['id'];
$sql = "DELETE FROM tbl_menu WHERE id=$id";
$res = mysqli_query($conn,$sql);
if($res==true)
{
    $_SESSION['delete']="<div class='success'>Food deleted successful</div>";
    
    header("Location: foods.php");
}
else
{
    $_SESSION['delete']="<div class='error'>Not deleted</div>";
    header("Location: foods.php");
}
?>