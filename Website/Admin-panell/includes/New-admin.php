<?php include('../includes/header.php'); ?>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
      $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
      $addr = filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
      $password2 = filter_input(INPUT_POST,"password2",FILTER_SANITIZE_SPECIAL_CHARS);

      if($password != $password2){
        $_SESSION['add']= "Password Dosent Match";
      }
      elseif(empty($username)|| empty($email) || empty($password) || empty($password2)){
        $_SESSION['add'] = "Please fill All Feilds";
      }
      else{
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (Name,Email,Password,Address,Types) VALUES ('$username','$email','$hash','$addr','admin')";
        mysqli_query($conn,$sql);
        $_SESSION['add'] = "Sucsessfuly Added";
        header("Location: admins.php");
      }
    }

  }

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="nadd">NEW ADMIN</h1><br><br>

         <div style="text-align: center; position: relative; top: -65px; left: 190px; border: solid; background-color: tomato; color: #fff; border-radius: 9px; width: 500px;" >
            <?php
                if(isset($_SESSION['add']) && $_SESSION['add'] != "off" )
                {
                    echo $_SESSION['add'];
                    $_SESSION['add']="off";
                }
            ?>
         </div>
            <br><br>

            <form class="mx-1 mx-md-4" style="position: relative; top: -112px;" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                              <input type="text" id="form3Example1c" name="name" class="form-control" />
                              <label class="form-label" for="form3Example1c">Your Name</label>

      
                              <input type="email" id="form3Example3c" name="email" class="form-control" />
                              <label class="form-label" for="form3Example3c">Your Email</label>

                              <input type="text" style="width: 55%;" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St, kandy">
                              <select id="inputState" style="width: 37%; position: relative; top:-40px; left: 540px;" class="form-control">
                                <option disabled selected style="text-align: center;">Kandy</option>
                              </select>
                              <label for="inputAddress mt-1" style="position: relative; top: -35px;">Address</label>
                              <label for="inputAddress mt-1" style="position: relative; top: -35px; left: 490px;">City</label>
                              <div style="position: relative; top: -35px;">
                                <input type="password" id="form3Example4c" name="password" class="form-control mt-1" />
                                <label class="form-label" for="form3Example4c">Password</label>

                                <input type="password" id="form3Example4cd" name="password2" class="form-control" />
                                <label class="form-label" for="form3Example4cd" style="position: relative; top: -20px;">Repeat your password</label>

                                <input type="submit" class="btn btn-warning mt-2 col-6" style="position: relative; top: 32px;" name="submit" value="Register">
                              </div>
                </form>
        </div>
    </div>

</div>


<?php include('../includes/footer.php'); ?>



