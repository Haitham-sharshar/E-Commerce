<?php include "db.php";?>
<div class="best-collection-area section-padding2">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-end">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                   
                        <div class="best-left-cap">
                            <h2>Best Collection of This Month</h2>
                            <p>Designers who are interesten crea.</p>
                            <a href="#nav-tabContent" class="btn shop1-btn">Shop Now</a>
                        </div>
                   
                        <div class="best-left-img mb-30 d-none d-sm-block">
                            <img src="assets/img/collection/collection1.png" alt="">
                        </div>
                    </div>
                    <!-- Mid Img -->
                     <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="best-mid-img mb-30 ">
                            <img src="assets/img/collection/collection2.png" alt="">
                        </div>
                    </div>
                    <!-- Riht Caption -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                    <?php 
                    $query = "SELECT * FROM products ORDER BY ABS(productPrice_new) DESC limit 4";
                    $result = mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_assoc($result)){

                    ?>
                        <div class="best-right-cap ">
                           <div class="best-single mb-30">
                              
                               <div class="single-img">
                                  <img src="admin/uploadimg/<?php echo $row ['productImage'];?>" alt="" width="150px" height="150px"> <h4 style="color: black;"><?php echo $row['productTitle'].'<br>';?> </h4>
                               </div>
                           </div>
                        </div>
                       <?php 
                    }
                ?>
                    </div> 
                </div>
            </div>
        </div>