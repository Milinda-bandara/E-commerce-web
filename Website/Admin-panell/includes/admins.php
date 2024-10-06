

<?php include('../includes/header.php'); ?>

<?php  
    if(!empty($_SESSION['delete'])){echo $_SESSION['delete'];} ?>
<div style="text-align: center; margin-top: 10px;">
    <?php
        
        if(!empty($_SESSION['add']) && $_SESSION['add'] != "off"){
            echo $_SESSION['add'];
            unset ($_SESSION['add']);
        }
    ?>
</div>
<!-- table create -->
<table class="tbl-full">
    <thead>
        <tr >
            <th >ID</th>
            <th >Name</th>
            <th >Email</th>
            <th >Address</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
    //query to get all admin
    $sql = "SELECT * FROM users WHERE Types ='admin'";
    //execute the query
    $res = mysqli_query($conn, $sql);

    //check wheter the quer is execute or not
    if ($res == true) {

        $count = mysqli_num_rows($res);

        $sn = 1;

        if ($count > 0) {

            while ($rows = mysqli_fetch_assoc($res)) {
                //get data in database
                $id = $rows['Id'];
                $name = $rows['Name'];
                $email = $rows['Email'];
                $adress = $rows['Address'];

                //display value in table
    ?>
                <tr>
                    <td ><?php echo $id ?></td>
                    <td ><?php echo $name ?></td>
                    <td ><?php echo $email ?></td>
                    <td ><?php echo $adress ?></td>
                    <td>
                        <select onchange="la(this.value)">
                            <option disabled selected>Choose</option>
                            <option value="update-adm.php?id=<?php echo $id; ?>">Update Admin</option> 
                            <option value="delete-adm.php?id=<?php echo $id; ?>">Delete Admin</option> 
                            <option value="password.php?id=<?php echo $id; ?>">Update password</option> 
                        </select>
                    </td>
                </tr>
   <?php
            }
        }
    }

    ?>
    </body>
</table>
 <a href="New-admin.php" class=" btn btn-outline-warning" id="admbtn" >Add Admin</a>
</div>
</div>
<?php include('../includes/footer.php'); ?>