<?php include('../includes/header.php'); ?>
<?php
if (isset($_POST['oderType'])) {
    $oderT = $_POST['oderType'];
} else {
    $oderT = "New";
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bckg">
                <img src="../../img/skil-chef.png" style="opacity: 0.2;;" alt="chef">
            </div>

            <div class="nadd">
                <h1><?php if (isset($oderT)) {
                        echo $oderT;
                    } ?> Orders</h1>
            </div>

            <div class="typ">
                <form method="post">
                    <label for="ty">Order Type :</label>
                    <select name="oderType" onchange="this.form.submit();" id="ty">
                        <option selected disabled> Choose</option>
                        <option value="New">New</option>
                        <option value="Compeleted">Compeleted</option>
                    </select>
                </form>
            </div>

            <?php
            $sql = "SELECT * FROM orders WHERE types = '$oderT'"; //latest order first

            //execute the query
            $res = mysqli_query($conn, $sql);
            //check wheter the quer is execute or not
            if ($res == true) {

                $count = mysqli_num_rows($res);


                $sn = 1;

                if ($count > 0) {

                    while ($rows = mysqli_fetch_assoc($res)) {
                        //get data in database
                        $order_id = $rows['order_id'];
                        $food = $rows['food'];
                        $cus_id = $rows['customer_id'];
                        $status = $rows['status'];
                        $qty = $rows['quantity'];
                        $total = $rows['price'];
                        $order_date = $rows['date'];
                        $customer_name = $rows['cus_name'];
                        $customer_contact = $rows['mobile'];
                        $customer_address = $rows['address'];
                        //display values 
            ?>
                        <div class="card  m-1 col-3 ">
                            <div class="card-header p-3 pt-2 bg-transparent" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);">
                                <div class="icon icon-lg icon-shape bg-dark shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-solid fa-drumstick-bite"></i>
                                </div>
                                <div style=" position: relative; left: 90px;">
                                    <h3 class=" mb-0 text-capitalize font-weight-bold"><?php echo $food ?></h3>
                                    <h5 class="mb-0 ">Quantity : <?php echo $qty ?></h5>
                                    <h5 class="mb-0 ">Name : <?php echo $customer_name ?></h5>
                                    <h5 class="mb-0 ">Mobile : <?php echo $customer_contact ?></h5>
                                    <h5 class="mb-0 ">Address : <?php echo $customer_address ?></h5>
                                    <h5 class="mb-0 ">Price : <?php echo $total ?></h5>
                                    <h5 class="mb-0 ">status : <?php echo $status ?></h5>


                                    <div style="font-weight: bold;  <?php 
                                        if(isset($oderT)&& $oderT=='Compeleted'){
                                            echo'display: none;';
                                        } 
                                    ?>">
                                    <form method="post" style="position: absolute; top: 15px; left: 360px; text-align: center; border-radius: 7px; font-weight: 500;">
                                        <label> Action :</label>
                                        <select name="statuss" onchange="this.form.submit();">

                                            <option selected disabled>Choose</option>
                                            <option value="accepted">Accepted</option>
                                            <option value="ready">Ready</option>
                                            <option value="onDelivery">On Delivery</option>
                                            <option value="dilivered">Delivered</option>

                                        </select>
                                        <input type="hidden" name="idd" value="<?php echo $order_id ?>">
                                    </form>
                                    </div>
                                    <?php
                                    if(isset($_POST['idd'])){
                                        $iddd = $_POST['idd'];
                                    }
                                    if (isset($_POST['statuss'])) {
                                        $stt = $_POST['statuss'];
                                        if (isset($stt) && $stt == 'dilivered') {
                                            $sql23 = "UPDATE orders SET status='$stt' , types = 'Compeleted' WHERE order_id ='$iddd'";
                                            mysqli_query($conn, $sql23);
                                        } else {
                                            
                                            $sql22 = "UPDATE orders SET status='$stt' WHERE order_id ='$iddd'";
                                            $resss = mysqli_query($conn, $sql22);
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">Date </span><?php echo $order_date ?></p>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>