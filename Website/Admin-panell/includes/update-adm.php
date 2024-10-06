<?php include('../includes/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="nadd">Update Admin</h1> <br>
        <?php
            
           //get id to update
           $id = $_GET['id'];

            //create sql query
            $sql = "SELECT * FROM users WHERE Id=$id";
            
            //execute the query
            $res = mysqli_query($conn,$sql);
            
            //check query
            if($res==true){
                $count = mysqli_num_rows($res);
                if($count==1){
                    $row=mysqli_fetch_assoc($res);
                    $id = $row['Id'];
                    $name=$row['Name'];
                    $email=$row['Email'];
                    $addr=$row['Address'];
                }else{
                $_SESSION['addd']="<div class='err_m'>Cant Load</div>";
                }
            }
            else{
                $_SESSION['addd']="<div class='err_m'>Cant update</div>";
                
            }
        ?>

        
            <?php
                if(!empty($_SESSION['addd'])){
                    echo $_SESSION['addd'];
                } 
            ?>
        

         <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
             <div class="form-group">
                 <label for="formGroupExampleInput">Name</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" name="name" value=" <?php echo $name ;?>">
             </div>

             <div class="form-group">
                 <label for="formGroupExampleInput2">Email</label>
                 <input type="text" class="form-control" id="formGroupExampleInput2" name="email"value=" <?php echo $email ;?>">
             </div>

             <div class="form-group">
                 <label for="formGroupExampleInput3">Address</label>
                 <input type="text" class="form-control" id="formGroupExampleInput3" name="address"value=" <?php echo $addr ;?>">
             </div>
             <div class="m-5">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="submit " value="Update Admin" class="btn btn-dark">
                <a style="text-decoration: none;" href="admins.php"><input style="width: 100px;" type="button" value="BACK" class="btn btn-dark"></a>
             </div>
         </form>
         <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $addr = $_POST['address'];

                $sql = "UPDATE users SET Name='$name', Email='$email', Address='$addr' WHERE Id='$id'";

                $res = mysqli_query($conn,$sql);

                if($res==true){
                    $_SESSION['addd']="<div class='sus_m'>Admin Update successful</div> ";
                }else{
                $_SESSION['addd']="<div class='err_m'>Not updated</div >";
                }
            }
        ?>
       </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>