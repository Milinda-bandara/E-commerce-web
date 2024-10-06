<?php include('../includes/header.php'); ?>
<?php
  //Admins
  $sql1 = "SELECT * FROM users WHERE Types = 'admin'";
  $res1 = mysqli_query($conn, $sql1);
  $count1 = mysqli_num_rows($res1);

  //Users
  $sql2 = "SELECT * FROM users WHERE Types = 'user'";
  $res2 = mysqli_query($conn, $sql2);
  $count2 = mysqli_num_rows($res2);

  //Oders
  $sql3 = "SELECT * FROM orders";
  $res3 = mysqli_query($conn, $sql3);
  $count3 = mysqli_num_rows($res3);

  //Foods
  $sql4 = "SELECT * FROM tbl_menu";
  $res4 = mysqli_query($conn, $sql4);
  $count4 = mysqli_num_rows($res4);

  

?>

<div class="container">
  <div class="row mt-5">
    
    <div class="card  m-1 col-3 ">
      <div class="card-header p-3 pt-2 bg-transparent">
        <div class="icon icon-lg icon-shape bg-dark bg-gradient shadow-success text-center border-radius-xl mt-n4 position-absolute">
          
          <i class="fa-solid fa-user-tie"></i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize ">Admins</p>
          <h4 class="mb-0 "><?php echo $count1; ?></h4>
        </div>
      </div>
      <hr class="horizontal my-0 dark">
      <div class="card-footer p-3">
        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+3% </span>than yesterday</p>
      </div>
    </div>

    <div class="card  m-1 col-3">
      <div class="card-header p-3 pt-2 bg-transparent">
        <div class="icon icon-lg icon-shape bg-dark bg-gradient shadow-success text-center border-radius-xl mt-n4 position-absolute">
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize ">Users</p>
          <h4 class="mb-0 "><?php echo $count2; ?></h4>
        </div>
      </div>
      <hr class="horizontal my-0 dark">
      <div class="card-footer p-3">
        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+0% </span>than yesterday</p>
      </div>
    </div>

    <div class="card  m-1 col-3">
      <div class="card-header p-3 pt-2 bg-transparent">
        <div class="icon icon-lg icon-shape bg-dark bg-gradient shadow-success text-center border-radius-xl mt-n4 position-absolute">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize ">Orders</p>
          <h4 class="mb-0 "><?php echo $count3; ?></h4>
        </div>
      </div>
      <hr class="horizontal my-0 dark">
      <div class="card-footer p-3">
        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
      </div>
    </div>

    <div class="card  m-1 col-3">
      <div class="card-header p-3 pt-2 bg-transparent">
        <div class="icon icon-lg icon-shape bg-dark bg-gradient shadow-success text-center border-radius-xl mt-n4 position-absolute">
          <i class="fa-solid fa-burger"></i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize ">Food Items</p>
          <h4 class="mb-0 "><?php echo $count4; ?></h4>
        </div>
      </div>
      <hr class="horizontal my-0 dark">
      <div class="card-footer p-3">
        <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+0% </span>than yesterday</p>
      </div>
    </div>

  </div>
</div>

<?php include('../includes/footer.php'); ?>