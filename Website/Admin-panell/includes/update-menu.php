<?php include('../includes/header.php'); ?>

<?php

if (isset($_GET['id'])) {
    //get id to update
    $id = $_GET['id'];

    //create sql query
    $sql2 = "SELECT * FROM tbl_menu WHERE id=$id";
    //execute the query
    $res2 = mysqli_query($conn, $sql2);
    //check query

    $row2 = mysqli_fetch_assoc($res2);

    $title = $row2['title'];
    $description = $row2['description'];
    $price = $row2['price'];
    $current_image = $row2['image_name'];
    $current_category = $row2['category_id'];
    $featured = $row2['featured'];
    $active = $row2['active'];
} else {
    header("Location: foods.php");
}




?>

<div class="main-content">
    <div class="wrapper">

        <h1 class="nadd">Update Menu</h1><br><br>



        <div class="row" style="position: relative; left: 50px;">
            <form action="" method="POST" enctype="multipart/form-data">


                <div class="col-4">

                    <label>Title:</label><br>
                    <input type="text" name="title" id="fii" value=" <?php echo $title; ?>"><br>


                    <label>Description:</label>
                    <textarea name="description" cols="30" rows="10"><?php echo $description; ?></textarea><br>


                    <label>Price:</label>
                    <input type="number" name="price" id="fii1" value=" <?php echo $price; ?>"><br>

                </div>
                <div class="secc col-4">

                    <label>Current image:</label>

                    <?php
                    if ($current_image != "") {
                        //display the image
                    ?>
                        <img src="../../img/<?php echo $current_image; ?>" width="150px">
                    <?php



                    } else {
                        //display massage
                        echo "<div class='error'>Image not added.</div>";
                    }
                    ?>


                    <br>

                    <label>New Image:</label>
                    <input type="file" name="image" value=" <?php echo $image_name; ?>"><br>




                        <label>Category :</label>
                        <select name="category">
                            <?php
                            //get active categorys in database
                            $sql = "SELECT * FROM tbl_category WHERE active='yes'";
                            //executing query
                            $res = mysqli_query($conn, $sql);
                            //check category
                            $count = mysqli_num_rows($res);
                            //if count>0 we have category
                            if ($count > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $category_title = $row['title'];
                                    $category_id = $row['id'];
                            ?>
                                    <option <?php if ($current_category == $category_id) {
                                                echo "selected";
                                            } ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>

                            <?php
                                }
                            } else {
                                echo "<option value='0'>Category not aveilable.</option>";
                            }


                            ?>


                        </select>



                        <br>
                        <label>Featured:</label>
                        <input <?php if ($featured == "yes") {
                                    echo "checked";
                                } ?>type="radio" name="featured" value="Yes">Yes
                        <input <?php if ($featured == "No") {
                                    echo "checked";
                                } ?> type="radio" name="featured" value="No">No
                        <br>


                        <label>Active:</label>
                        <input <?php if ($active == "yes") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="Yes">Yes
                        <input <?php if ($active == "No") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="No">No
                        <br>





                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="submit" name="submit" value="Update  Menu" class="btn btn-dark">



                </div>
                
            </form>
            <div class="fakespace"></div>
        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {   //get details in the form
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $category = $_POST['category'];

            $featured = $_POST['featured'];
            $active = $_POST['active'];

            //check upload button

            if (isset($_FILES['image']['name'])) {
                //btn clicked
                $image_name = $_FILES['image']['name'];

                //check file aveilable
                if ($image_name != "") {
                    $ext = end(explode('.', $image_name));
                    $image_name = "Food-Name-" . rand(0000, 9999) . '.' . $ext;

                    //getthe source path and destination path
                    $source_path = $_FILES['image']['tmp_name'];
                    $destination_path = "../../img/" . $image_name;

                    //upload image
                    $upload = move_uploaded_file($source_path, $destination_path);

                    if ($upload == false) {
                        //echo"Data inserted";
                        $_SESSION['upload'] = "<div class='error'>failed to upload image</div>";

                        header("Location: foods.php");

                        die();
                        //rederect page
                    }

                    //remove current image
                    if ($current_image != "") {
                        $remove_path = "../images/food/" . $current_image;
                        $remove = unlink($remove_path);

                        if ($remove == false) {
                            //failed to remove current image
                            $_SESSION['remove-failed'] = "<div class='error'>Failed to remove current image.</div>";
                            header("Location: foods.php");
                            die();
                        }
                    }
                } else {

                    $image_name = $current_image;
                }
            } else {

                $image_name = $current_image;
            }

            $sql3 = "UPDATE tbl_menu SET
        title='$title',
        description='$description',
        price='$price',
        image_name='$image_name',
        category_id='$category',
        featured='$featured',
        active='$active'
        WHERE id='$id'
        ";

            $res3 = mysqli_query($conn, $sql3);

            if ($res3 == true) {
                //echo"Data inserted";
                $_SESSION['update'] = "<div class='success'>Menu Updated successfully</div>";

                header("Location: foods.php");


                //rederect page
            } else {
                //echo "faile to inserted";
                //echo"Data inserted";
                $_SESSION['update'] = "<div class='error'>Menu Updated not successfully</div>";
                //rederect page
                header("Location: foods.php");
            }
        }

        ?>







        


    </div>
    
</div>
<?php include('../includes/footer.php'); ?>