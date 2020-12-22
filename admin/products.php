<?php include "db.php";?>
<?php 

if (isset($_GET['id'])){
   
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $id";
   $Delete = mysqli_query($conn,$query);
    if (isset($Delete)){
       echo "<div class='alert alert-success'>" .'The Data Deleted Successfuly' ."</div>"; 

    }else
    echo "<div class='alert alert-danger'>" .'Something wrong happened' ."</div>";

}



?>
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

                <div class="col-md-10" id="main-area">
                <!--Display All-->
  
                <table class="table table-bordered">
                    <tr>
                        <th>product Id</th>
                        <th>product Title</th>
                        <th>product Category</th>
                        <th>product Image</th>
                        <th>product price_old</th>
                        <th>product price_new</th>
                        <th>product Details</th>
                        <th>product Date</th>
                        <th>Delete product</th>

                    </tr>
                <?php 
                $sql = "SELECT products.id , products.productTitle , products.productImage , products.productPrice_old , products.productPrice_new ,  
                products.product_Details , products.productDate , categories.categoryCaption  FROM products INNER JOIN categories on categories.id = products.category ";
                 $result = mysqli_query($conn,$sql);
                 while ($row = mysqli_fetch_assoc($result)){

                 
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['productTitle'];?></td>
                        <td><?php echo $row['categoryCaption'];?></td>
                        <td><img src="uploadimg/<?php echo $row['productImage'];?>" width="70px" height="50px"></td>
                        <td><?php echo $row['productPrice_old'];?></td>
                        <td><?php echo $row['productPrice_new'];?></td>
                        <td><?php echo $row['product_Details'];?></td>
                        <td><?php echo $row ['productDate'];?></td>
                        <td><a href="products.php?id=<?php echo $row ['id'];?>"><button class="btn btn-secondary" name="Delete">Delete product</button></a></td>
                    </tr>
                    <?php
                }
          ?>
                        </table>
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