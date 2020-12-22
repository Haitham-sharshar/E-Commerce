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
    <link rel="stylesheet" href="css/font-awesome.min">
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
                    <li data-toggle="collapse" data-target="#menu">
                        <a href="#menu">
                            <span><i class="far fa-newspaper"></i></span>
                            <span>Products</span>
                        </a>
                    </li>
                    <ul class="collapse" id="menu">
                        <li>
                            <a href="add_product.php">
                                <span><i class="far fa-edit"></i></span>
                                <span>New product</span>
                            </a>
                        </li>
                        <li>
                            <a href="products.php">
                                <span><i class="fas fa-th-large"></i></span>
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
        
   <?php 
   $msg ='';
   if (isset($_POST['add'])){
         if (empty ($_POST['title'])){
       $msg =  "<div class='alert alert-danger'>" .'please, Write The Product Title' ."</div>";

    } else if (empty($_POST['category'])){
         $msg =  "<div class='alert alert-danger'>" .'please, Write The Product category' ."</div>";
        
        }else if (empty ($_POST['_pro_price_old'])){
            $msg =  "<div class='alert alert-danger'>" .'please, Write The Product Price' ."</div>";
        }else if (empty($_POST['_pro_price_new'])){
            $msg =  "<div class='alert alert-danger'>" .'please, Write The Product Price Discount' ."</div>";
        }else {
            $image_Name = $_FILES['productImage']['name'];
       $image_Tmp = $_FILES['productImage']['tmp_name'];
       $product_image = rand(0,1000)."_" . $image_Name;
       move_uploaded_file($image_Tmp,"uploadimg\\".$product_image);
       $product_title = $_POST['title'];
       $product_category = $_POST['category'];
       $product_price_old = $_POST['_pro_price_old'];
       $product_price_new = $_POST['_pro_price_new'];
       $product_details = $_POST['details'];
       
        $query = "INSERT INTO products (productTitle,category,productImage,productPrice_old,productPrice_new,product_Details)
        
            VALUES ('$product_title','$product_category','$product_image','$product_price_old','$product_price_new','$product_details')";
           $res= mysqli_query($conn,$query);        
        } 
        if (isset($res)){
            $msg =  "<div class='alert alert-success'>" .'The Data Entered Successfuly' ."</div>"; 
        } 
   }

   ?>
            <div class="col-md-10" id="main-area">
            <span><?php echo $msg;?></span>
                <div class="add-product">          
               <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">product Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">product Category</label>
                            <select name="category" id="cat" class="form-control">
                            <?php 
                                    $sql = "SELECT * FROM categories";
                                    $result = mysqli_query($conn,$sql);
                                    while($row= mysqli_fetch_assoc($result)){
                                ?>
                                <option value="<?php echo $row['id'];?>" >
                                    <?php echo $row ['categoryCaption'];?>
                                </option>
                                <?php 
                                }
                                ?>
                            </select>
                           
                        </div>
                       
                        <div class="form-group">
                            <label for="image">Product Image :</label>
                            <input type="file"  name="productImage">
                        </div>
                        <div class="form-group">
                            <label for="price">product Price Before Discount</label>
                            <td width="30%"><input type="number" name="_pro_price_old" min="1" max="50000"></td>
                        </div>
                        <div class="form-group">
                            <label for="price">product price After Discount</label>
                            <td width="30%"><input type="number" name="_pro_price_new" min="1" max="50000"></td>
                        </div>
                        <div class="form-group">
                            <h5 for="details" >product Details : </h5>
                            <td width="30%"><textarea style="width: 360px; height:200px" name="details"></textarea></td>
                        </div>
                        <button class="btn-custom" name="add" type="submit">Add product</button>
                    </form>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>