
<?php include('../includes/header.php');
    $add="off";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="nadd">Update Password</h1><br>
        <?php
            if($add != "off" && isset($add)){
                echo $add;
            }
            
            
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                      
            }
           
        ?>

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Current Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="c_pass">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">New Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="n_pass1">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Confirm Password</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="n_pass2">
                </div>

                <div class="m-5">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" name="submit" value="Update Admin" class="btn btn-dark">
                    <a style="text-decoration: none;" href="admins.php"><input style="width: 100px;" type="button" value="BACK" class="btn btn-dark"></a>
                </div>
            </form>

            <?php
                
                if(isset($_POST['submit'])){
                    //get data in form
                    $id = $_POST['id'];
                    $current_password = $_POST['c_pass'];
                    $new_password = $_POST['n_pass1'];
                    $confirm_password = $_POST['n_pass2'];
                   


                    //get data from db
                    $sql = "SELECT * FROM users WHERE Id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(isset($result)){
                        if(mysqli_num_rows($result)> 0){
                           $row = mysqli_fetch_assoc($result);
                           $passw = $row["Password"];
                           
                           
                           
                        }
                    } 
                    
                if(password_verify($current_password,$passw)){
                    if($new_password == $confirm_password){
                            
                        $hash = password_hash($new_password,PASSWORD_DEFAULT);
                        $sql2="UPDATE users SET Password='$hash' WHERE Id=$id";
                        $res2=mysqli_query($conn,$sql2);

                        if($res2==true){
                            $add="<div class='sus_m'>successfuly change</div>";
                            echo $add;
                            
    
                        }
                        else{
                            $add="<div class='err_m'>Failed to update</div>";
                            echo $add;
                            
                        }
                    }
                    else{
                        $add="<div class='err_m'>Wrong Password</div>";
                        echo $add;
                    }
                }else{
                    $add="<div class='err_m'>Wrong Password</div>";
                    echo $add;
                }

                
            }else{
                $add="<div class='err_m'>failed to load</div>";
                echo $add;
            }
            ?>


        </div>
    </div>
</div>


<?php include('../includes/footer.php'); ?>