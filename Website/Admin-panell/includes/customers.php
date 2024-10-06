

<?php include('../includes/header.php'); ?>

<?php  
    if(!empty($_SESSION['delete'])){
        echo $_SESSION['delete'];} 
?>
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
    $sql = "SELECT * FROM users WHERE Types ='user'";
    //execute the query
    $res = mysqli_query($conn, $sql);
    if ($res == true) {

        $count = mysqli_num_rows($res);

        $sn = 1;

        if ($count > 0) {

            while ($rows = mysqli_fetch_assoc($res)) {
                //get data in database
                $type = $rows['Types'];
                $id = $rows['Id'];
                $name = $rows['Name'];
                $email = $rows['Email'];
                $adress = $rows['Address'];

        ?>
                <tr>
                    <td ><?php echo $id ?></td>
                    <td ><?php echo $name ?></td>
                    <td ><?php echo $email ?></td>
                    <td ><?php echo $adress ?></td>
                    <td>
                        <a href="delete-adm.php?id=<?php echo $id; ?>&type=<?php echo $type; ?>"> <input type="button" class="btn btn-dark" value="DELETE"></a>
                    </td>
                </tr>
    <?php
            }
        }
    }

    ?>
    </tbody>
</table>

</div>
</div>
<?php include('../includes/footer.php'); ?>