<?php include("../connection/config.php"); ?>

<?php
//
if (isset($_GET['user_name'])) {

    $userr = $_GET['user_name'];
    $sql33 = "SELECT * FROM users WHERE Name = '$userr'";
    $res = mysqli_query($con, $sql33);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row2 = mysqli_fetch_assoc($res);
        $address = $row2['Address'];
        $email = $row2['Email'];
        $cId = $row2['Id'];
    } else {
        header("Location:../login/login.php");
    }
} else {
    header("Location:../login/login.php");
}

if (isset($cId)) {
    $sql = "SELECT * FROM orders WHERE customer_id = '$cId'";
    $res25 = mysqli_query($con, $sql);
    $count2 = mysqli_num_rows($res25);
    $hco = $count2;
    while ($count2 > 0) {
        $row = mysqli_fetch_assoc($res25);
        $quantity[] = $row['quantity'];
        $status[] = $row['status'];
        $price[] = $row['price'];
        $mobile = $row['mobile'];
        $food[] = $row['food'];
        $date[] = $row['date'];
        $order_id = $row['order_id'];
        $count2--;
    }
}

if(isset($_POST['sub'])){
    $rev = $_POST['re'];
    $revq = "INSERT INTO cus_rev (name,review) VALUES ('$userr','$rev')";
    mysqli_query($con,$revq);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-Monkey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="shortcut icon" href="../img/logo.PNG" type="image/PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>


    <div class="container row justify-content-center">
        <div class="mt-4 col-5">
            <div class="card p-4" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);">
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="../img/user.png" height="100" width="100" /></button> <span class="name mt-3"><?php echo $userr; ?></span> <span class="idd"><?php echo $email; ?></span>
                      <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><?php echo $hco; ?> <span class="follow">oders</span></span> </div>
                   <div class="text mt-3"> <span style="font-weight: bold;">Address : <?php echo $address; ?> </span> <br> <span>Number : <?php echo $mobile; ?> </span> </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    <form action="" method="post">
                        <input type="text" style="width: 100%;" name="re" >
                        <input type="submit" class="btn btn-dark" style="margin-top: 5px;   height: auto;" name="sub" value="add Reviews">
                    </form>
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined 2023</span> </div>
                </div>
            </div>
            <a href="../index/index.php"><button style="position: relative; top: 3px; left: 90px; height: 40px;" class="btn btn-dark">Back</button></a>
        </div>
        <div class="col-5 card p-4">
            <div class="card" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);">
                <div class="title text-center">Purchase Reciept</div>
                <div class="info">
                    <div class="row">
                        <div class="col-7">
                            <span id="heading">Date</span><br>
                            <span id="details"><?php echo $date[0]; ?></span>
                        </div>
                        <div class="col-5 pull-right">
                            <span id="heading">Order No.</span><br>
                            <span id="details"><?php echo $order_id; ?></span>
                        </div>
                    </div>
                </div>
                <div class="pricing">
                    <?php
                    $i = $hco;
                    $total = 0;
                    while ($i > 0) {
                        $d = $i - 1;
                        echo "
                                <div class='row'>
                             
                                <div class='col-9'>
                                $quantity[$d] <span id='name'> $food[$d] </span>
                               </div>
                                <div class='col-3'>
                                    <span id='price'>Rs $price[$d]</span>
                                </div>
                                </div>

                            ";
                        $total += $price[$d];
                        $i--;
                    }
                    $total += 50;

                    ?>
                    <div class="row">
                        <div class="col-9">
                            <span id="name">Shipping</span>
                        </div>
                        <div class="col-3">
                            <span id="price">Rs 50.00</span>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="row">
                        <div class="col-7">Total</div>
                        <div class="col-5 text-sm-end">Rs <?php echo $total; ?></div>
                    </div>
                </div>
                <div class="tracking">
                    <div class="title">Tracking Order</div>
                </div>
                <div class="progress-track">
                    <ul id="progressbar">
                        <li class="step0 " id="step1">accepted</li>
                        <li class="step0 " id="step2">Ready</li>
                        <li class="step0 " id="step3">Pick up</li>
                        <li class="step0 " id="step4">Diliverd</li>
                    </ul>

                </div>
                <p style="display: none;" id="abc"><?php echo $status[0]; ?></p>
            </div>

        </div>


        <script>
            let x = document.getElementById("abc").innerHTML;

            switch (x) {
                case 'dilivered':
                    document.getElementById("step4").classList.add("active");
                case 'onDelivery':
                    document.getElementById("step3").classList.add("active");
                case 'ready':
                    document.getElementById("step2").classList.add("active");
                case 'accepted':
                    document.getElementById("step1").classList.add("active");
                    break;

            }
        </script>

</body>

</html>