<?php include('../includes/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="nadd">Manage Menu</h1><br>
            <a href="../../../add/admin/add-menu.php" class="btn btn-dark">Add New Food</a>
            <br>

            <?php
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Title</th>

                    <th>Price(Rs.)</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>

                <?php
                //query to get all admin
                $sql = "SELECT * FROM tbl_menu";
                //execute the query
                $res = mysqli_query($conn, $sql);

                //check wheter the quer is execute or not
                if ($res == true) {

                    $count = mysqli_num_rows($res);

                    $sn = 1;

                    if ($count > 0) {

                        while ($rows = mysqli_fetch_assoc($res)) {
                            //get data in database
                            $id = $rows['id'];
                            $title = $rows['title'];

                            $price = $rows['price'];
                            $image_name = $rows['image_name'];
                            $featured = $rows['featured'];
                            $active = $rows['active'];

                            //display value in table
                ?>

                            <tr>
                                <td><?php echo $sn++ ?></td>
                                <td><?php echo $title ?></td>

                                <td><?php echo $price ?></td>
                                <td><?php

                                    if ($image_name != "") {
                                        //display the image
                                    ?>
                                        <img src="../../../add/images/food/<?php echo $image_name; ?>" width="100px" height="100px">

                                    <?php
                                    } else {
                                        echo "<div class='error'>Image not added.</div>";
                                    }

                                    ?>
                                </td>
                                <td><?php echo $featured ?></td>
                                <td><?php echo $active ?></td>

                                <td>
                                    <!--<a href="update-menu.php?id=" class="btn btn-warning">Update Food</a>-->
                                    
                                    <a href="delete-menu.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete Food</a>
                                </td>
                            </tr>
               <?php
                        }
                    }
                }

                ?>

            </table>

<div class="fakespace"></div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>