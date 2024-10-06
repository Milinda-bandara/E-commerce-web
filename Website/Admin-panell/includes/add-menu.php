<?php include('../includes/header.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="nadd">Add Menu</h1><br><br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset ($_SESSION['add']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset ($_SESSION['upload']);
            }
           ?>
           <br><br>

        <form action="" method="POST" enctype="multipart/form-data">

<table class="tbl-30">
    <tr>
        <td>Title :</td>
        <td><input type="text" name="title"placeholder="Menu title"></td>
    </tr>
    <tr>
        <td>Description :</td>
        <td><textarea name="description"  cols="30" rows="10" placeholder="Description"></textarea></td>
    </tr>
    <tr>
        <td>Price :</td>
        <td><input type="number" name="price"></td>
    </tr>
    <tr>
        <td>Select Image :</td>
        <td><input type="file" name="image"></td>
    </tr>
    <tr>
            <td>Category :</td>
            <td>  <select name="category" >
                <?php
                //get active categorys in database
                $sql = "SELECT * FROM tbl_category WHERE active='yes'";
                //executing query
                $res = mysqli_query($conn , $sql);
                //check category
                $count= mysqli_num_rows($res);
                //if count>0 we have category
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title= $row['title'];
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                        <?php
                    }
                }
                else
                {
                    ?>
                    <option value="0">no category found</option>
                    <?php
                }
                ?>
            </select></td>
    </tr>

    <tr>
        <td>Featured:</td>
        <td><input type="radio" name="featured"value="Yes">Yes
        <input type="radio" name="featured"value="No">No</td>
    </tr>
    <tr>
        <td>Active:</td>
        <td><input type="radio" name="active"value="Yes">Yes
        <input type="radio" name="active"value="No">No</td>
    </tr>
    
    <tr>
        <td colspan="2"><br>
            <input type="submit" name="submit " value="Add Food" class="btn-secondary">
        </td>
    </tr>
</table>
</form>

<?php 
// get values form and save it database
    if($_SERVER["REQUEST_METHOD"] === "POST") {

     $title = $_POST['title'];
     $description = $_POST['description'];
     $price = $_POST['price'];
     
     if(isset($_FILES['image']['name']))
     {//insert image
        $image_name = $_FILES['image']['name'];

        if($image_name!=""){
                //aouto reaname our image
        $ext = end(explode('.',$image_name));

        //rename the image
        $image_name = "Food_Category_".rand(0000, 9999).'.'.$ext;

        $source_path = $_FILES['image']['tmp_name'];
        $destination_path = "../images/food/".$image_name;

        //upload image
        $upload=move_uploaded_file($source_path,$destination_path);

        //check upload or not
        if($upload==false){
            //echo"Data inserted";
            $_SESSION['upload']="<div class='error'>failed to upload image</div>";
            
            header("Location: add-menu.php");
            die();
            //rederect page
            }
        }
     }
     else
     {
        $image_name= "";
     }

     $category = $_POST['category'];

     if(isset($_POST['featured']))
     {
        $featured = $_POST['featured'];
     }
     else
     {
        $featured = "No";
     }
     if(isset($_POST['active']))
     {
        $active = $_POST['active'];
     }
     else
     {
        $active= "No";
     }


     $sql2 = "INSERT INTO tbl_menu SET
        title='$title',
        description='$description',
        price=$price,
        image_name='$image_name',
        category_id=$category,
        featured='$featured',
        active='$active'
        ";

        //exicute and save data
        $res2 = mysqli_query($conn,$sql2);

        //check query exicute
        if($res2==true){
            //echo"Data inserted";
            $_SESSION['add']="<div class='success'>food added successfully</div>";
            
            header("Location: manage_menu.php");
            //rederect page
            }
        else{
            
             $_SESSION['add']="<div class='error'>food added not successfully</div>";
             //rederect page
             header("Location: manage_menu.php");
           }
   }

?>
        <div class="fakespace"></div>
    </div>
</div>
<?php include('../includes/footer.php'); ?>

