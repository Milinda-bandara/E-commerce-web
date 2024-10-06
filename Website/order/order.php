<?php include("../connection/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
            <div class="n">
                <h1> Bad Monkey Street Food</h1>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Menu </Menu></a>
                    </li>
                    <li>
                        <a href="categories.html">Feedback</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>

        </div>
    </section>
    <?php
    
    if (isset($_GET['food_id'])) {
        $food_id = $_GET['food_id'];
        $userr = $_GET['user_name'];
        $sql = "SELECT * FROM tbl_menu WHERE id=$food_id";
        $sql33 = "SELECT * FROM users WHERE Name = '$userr'";
        $res33 = mysqli_query($con, $sql33);
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $row2 = mysqli_fetch_assoc($res33);
            $row = mysqli_fetch_assoc($res);
            $address = $row2['Address'];
            $email = $row2['Email'];
            $cId = $row2['Id'];
            $title = $row['title'];
            $price = $row['price'];
            $image_name = $row['image_name'];
        } else {
            header("Location : ../index/index.php");
        }
    } else {
        header("Location : ../index/index.php");
    }
    ?>
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="post" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <?php

                        if ($image_name == "") {
                            echo "<div class='error'>image not aveilable</div>";
                        } else {
                        ?>

                            <img src="../img/<?php echo $image_name; ?>" alt="roast Panos" class="img-responsive img-curve">

                        <?php
                        }
                        ?>

                    </div>

                    <div class="food-menu-desc ">
                        <h3> <?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price"><?php echo $price; ?></p>
                        <input type="number" style="display: none;" name="price" value="<?php echo $price; ?>">


                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                    </div>

                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" value="<?php echo $userr; ?>" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" class="input-responsive" required><?php echo $address; ?></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
            if (isset($_POST['submit'])) {
                $food = $_POST['food'];
                $price1 = $_POST['price'];
                $qty = $_POST['qty'];
                $price = $price * $qty;
                $customer_name = $_POST['full-name'];
                $customer_contact = $_POST['contact'];
                $customer_email = $_POST['email'];
                $customer_address = $_POST['address'];

                
                $sql2 = "INSERT INTO orders SET
                food='$food',
                price='$price',
                quantity='$qty',
                customer_id='$cId',
                cus_name='$customer_name',
                mobile='$customer_contact',
                email='$customer_email',
                food_id= '$food_id',
                address='$customer_address'

                ";
                $res2 = mysqli_query($con, $sql2);  
                if ($res2 == true) {
                    $_SESSION['add'] = "<div class='success'>Ordered successfully</div>";

                    header("Location: ../index/index.php");
                } else {
                    $_SESSION['add'] = "<div class='error'>Order Failed</div>";
                    header("Location: ../index/index.php");
                }
            }
            ?>

        </div>
    </section>

    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>

            </ul>
        </div>
    </section>
   
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved.</p>
        </div>
    </section>

</body>

</html>