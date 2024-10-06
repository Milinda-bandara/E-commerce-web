<?php
  include("../connection/config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
      $username = filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
      $addr = filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
      $password2 = filter_input(INPUT_POST,"password2",FILTER_SANITIZE_SPECIAL_CHARS);

      if($password != $password2){
        $error[]= "Password Dosent Match";
      }
      elseif(empty($username)|| empty($email) || empty($password) || empty($password2)){
        $error[] = "Please fill All Feilds";
      }
      else{
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (Name,Email,Password,Address) VALUES ('$username','$email','$hash','$addr')";
        mysqli_query($con,$sql);
        header("Location: login.php");
      }
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body style="background-color: #797D7F;">
    <section class="vh-90" style="background-color: #797D7F;">
        <div class="container h-90" >
          <div class="row d-flex justify-content-center align-items-center h-90">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style=" border-radius: 30px;">
                <div class="card-body ">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 ">Sign up</p>
                          <div class="d-flex flex-row align-items-center mb-4" >
                          <div class="form-outline flex-fill mb-0">
                            <?php 
                              if(!empty($error)){
                                foreach($error as $error){
                                  echo'<span class="err-m" style=" text-align: center; margin: 10px 0; display: block; background: crimson; color: #fff; border-radius: 5px; font-size: 20px;">'.$error.'</span>';
                                }
                              }
                            ?>                            
                            <form class="mx-1 mx-md-4" style="position: relative; top: -30px;" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                              <input type="text" id="form3Example1c" name="name" class="form-control" />
                              <label class="form-label" for="form3Example1c">Your Name</label>      
                              <input type="email" id="form3Example3c" name="email" class="form-control" />
                              <label class="form-label" for="form3Example3c">Your Email</label>

                              <input type="text" style="width: 60%;" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                              <select id="inputState" style="width: 37%; position: relative; top:-37px; left: 210px;" class="form-control">
                                <option disabled selected>Kandy</option>
                              </select>
                              <label for="inputAddress mt-1" style="position: relative; top: -24px;">Address</label>
                              <label for="inputAddress mt-1" style="position: relative; top: -24px; left: 155px;">City</label>
              
                              <input type="password" id="form3Example4c" name="password" class="form-control mt-1" />
                              <label class="form-label" for="form3Example4c">Password</label>

                              <input type="password" id="form3Example4cd" name="password2" class="form-control" />
                              <label class="form-label" for="form3Example4cd">Repeat your password</label>

                              <input type="submit" class="btn btn-outline-warning mt-4 col-12" name="submit" value="Register">
                              <p style="font-weight: 600; margin-top: 20px;">Allrady Have an Account ? <a  href="login.php">Log in</a></p>
                            </form>
                          </div>
                        </div>      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="../img/13.JPG" style="border-radius: 30px;"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>

<?php
  mysqli_close($con);
?>