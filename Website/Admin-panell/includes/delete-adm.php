<?php 
include('connection.php');
//get id to delete
 $id = $_GET['id'];
 $type = $_GET['type'];

//create sql query
$sql = "DELETE FROM users WHERE Id=$id";


//execute the query
$res = mysqli_query($conn,$sql);

//chek query
if($res==true)
{
    $_SESSION['delete']="<div class='sus_m'>Admin deleted successful</div>";

    if($type == "user"){
        header("Location: customers.php");
    }else{
        header("Location: admins.php");
    }
}
else
{
    $_SESSION['delete']="<div class='err_m'>Not deleted</div>";
    if($type == "user"){
        header("Location: customers.php");
    }else{
        header("Location: admins.php");
    }
}
?>