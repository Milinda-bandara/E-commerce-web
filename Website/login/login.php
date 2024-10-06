<?php
   include("../connection/config.php");
   session_start();
   $passw = "a";
   $pass= "a";
   if(isset($_POST["login"])){
      if(!empty($_POST["username"]) && !empty($_POST["password"])){
         $_SESSION["username"] = $_POST["username"];
         $usern = $_POST["username"];
         $pass = $_POST["password"];
         $sql = "SELECT * FROM users WHERE Name = '$usern'";
         $result = mysqli_query($con,$sql);
      }else{
         $errors[]="<P>Username or password missing</p>";
      }
      if(isset($result)){
         if(mysqli_num_rows($result)> 0){
            $row = mysqli_fetch_assoc($result);
            $passw = $row["Password"];
            $types = $row["Types"];
            $_SESSION["addr"] = $row["Address"];
         }
         else{
            $error[]= "User Name Wrong";
         }
      }
      
      if(password_verify($pass,$passw)){
         if($types == "admin"){
            header("Location:../Admin-panell/includes/index.php");
            $_SESSION["types"] = "admin";
         }
         else{
            header("Location:../index/index.php");
            $_SESSION["types"] = "user";
         }

         
      }
      else{
         $error[]= "Worng Password";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Css Link-->
    <link rel="stylesheet" href="style2.css">
    <!--BootStrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

</head>
<body style="background-color:#C0C0C0;">
    <div class="sidenav"></div>

    <div class="login-main-text" id="sideee">
      <span id="element"></span>
     <h2 style="color: black; font-weight: 900;"> Login Here</h2>
   </div>
     <div class="main" >
        <div class="col-md-6 col-sm-12 m-3">
           <div class="login-form mt-0">
                 <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                  <div class="form-row">
                  <?php 
                     if(!empty($error)){
                       foreach($error as $error){
                         echo'<span class="err-m" style=" text-align: center; width:133%; margin: 10px 0; display: block; background: crimson; color: #fff; border-radius: 5px; font-size: 20px;">'.$error.'</span>';                             }
                        }
                  ?>
                    <div class="form-group col-md-6">
                      
                      <label for="inputEmail4">User Name</label>
                      <input type="text" class="form-control"  name="username" placeholder="User Name" style="width: 500px; margin-top: 10px;">
                    </div>
                    <div class="form-group col-md-6 mt-3">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password" style="width: 500px; margin-top: 10px;">
                    </div>
                    <input type="submit" class="btn btn-dark mt-3" name="login" value="Log in">
                   </form>
              <a href="register.php"><button type="button" class="btn btn-secondary mt-3">Register</button></a>
              </form>
           </div>
        </div>
     </div>
    <script src="script2.js"></script>
</body>
</html>
<?php
  mysqli_close($con);
?>