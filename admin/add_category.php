<?php include "db.php";?>
<?php 
  if (isset($_POST['add'])){

    if (empty( $_POST['categoryCaption'])){
        echo "<div class='alert alert-danger'>" .'please, Write The Category Title' ."</div>";
    }else if      
     (empty( $_POST['categoryName'])){
        echo "<div class='alert alert-danger'>" .'please, Write The Category Name' ."</div>";

    }else if 
        (empty( $_POST['categoryDesc'])){
            echo "<div class='alert alert-danger'>" .'please, Write The Category Desc' ."</div>";

    }else {
        $imageName = $_FILES['categoryImage']['name'];
        $imageTmp = $_FILES['categoryImage']['tmp_name'];
        $categoryimage = rand(0,1000)."_" . $imageName;
        move_uploaded_file($imageTmp,"uploadimg\\".$categoryimage);
        $categoryCaption = $_POST['categoryCaption'];
        $categoryname = $_POST['categoryName'];
        $categorydesc = $_POST ['categoryDesc']; 
        $query = "INSERT INTO categories (categoryImage,categoryCaption,categoryName,categoryDesc) VALUES ('$categoryimage','$categoryCaption','$categoryname','$categorydesc')";
        mysqli_query($conn,$query);
        echo "<div class='alert alert-success'>" .'The data was entered successfully ' ."</div>"; 
    }
    
}
    if (isset($_GET['id']) ){
        $id = $_GET['id'];
        $sql = "DELETE FROM categories WHERE id = $id";
        $delete = mysqli_query($conn,$sql);
        if (isset($delete)){
            echo "<div class='alert alert-success'>" .'The data was Deleted successfully ' ."</div>"; 

        }else{
            echo "<div class='alert alert-danger'>" .'The problem was happened' ."</div>";

        }

    }

?>

<?php include "db.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control panal</title>
    <!--Bootstrap-->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

   
</head>

<body>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-2" id="side-area">
                <h4>Control panal</h4>
                <ul>
                    <li>
                        <a href="add_category.php">
                            <span><i class="fas fa-tags"></i></span>
                            <span style="color:black;">categories</span>
                        </a>
                    </li>
                    <!--Articles-->
                    <li data-toggle = "collapse" data-target="#menu">
                        <a href="#menu">
                            <span>Products</span>
                        </a>
                    </li>
                    <ul class="collapse" id="menu">
                        <li>
                            <a href="add_product.php">
                                <span>New product</span>
                            </a>
                        </li>
                        <li>
                            <a href="products.php">
                                <span>All products</span>
                            </a>
                        </li>
                    </ul>
                    <li>
                        <a href="../index.php" target="_blank">
                            <span><i class="fas fa-window-restore"></i></span>
                            <span>view Website</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            <span>logout</span>
                        </a>
                    </li>
                </ul>
        
            </div>
            <div class="col-md-10" id="main-area">
                <div class="add-category">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="category">Category Image</label>
                            <input type="file" name="categoryImage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="categoryCaption">Category Caption</label>
                            <input type="text" name="categoryCaption" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category"> Category Name</label>
                            <input type="text" name="categoryName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Category Desc</label>
                            <input type="text" name="categoryDesc" class="form-control">
                        </div>
                        
                        <button class="btn-custom" name="add">Add</button>
                    </form>
                </div>

                <!--Display Categories-->
                <div class="display-category mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <th> Category id</th>
                            <th>Category image</th>
                            <th>Category Caption</th>
                            <th>Category name</th>
                            <th>Category Desc</th>
                            <th>Date added</th>
                            <th>Delete Category</th>
                        </tr>
                      <?php 
                         $query ="SELECT * FROM categories ";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_assoc($result)){
                       ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['categoryImage'];?></td>
                            <td><?php echo $row['categoryCaption'];?></td>
                            <td><?php echo $row['categoryName'];?></td>
                            <td><?php echo $row['categoryDesc'];?></td>
                            <td><?php echo $row ['categoryDate'];?> </td>
                            <td><a href="add_category.php?id=<?php echo $row['id'];?>"><button class="btn btn-dark" name="delete">Delete Category</button></a></td>
                   <?php 
                    } 
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>