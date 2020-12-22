<?php 
 include "db.php";

?>
<section class="latest-product-area padding-bottom">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                                                              <!--Start All products-->
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php 
                          $query = "SELECT * FROM products limit 6";
                          $result = mysqli_query($conn,$query);
                          while ($row = mysqli_fetch_assoc($result)){

                         
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="admin/uploadimg/<?php echo $row['productImage'];?> " alt="" style="width:200px " height="200px">
                                        <div class="new-product">
                                           
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="single-product.php?id=<?php echo $row['id'];?>"><?php echo $row['productTitle'];?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?php echo $row['productPrice_new']. " $";?></li>
                                                <li class="discount"><?php echo $row['productPrice_old']. " $";?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php 
                        }
                    ?>    
                        </div>
                    </div>
                                                 <!-- End All products -->
                                                 <!-- Start New products -->

                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <?php
                        $query = "SELECT * FROM products ORDER BY id DESC limit 6";
                          $result = mysqli_query($conn,$query);
                          while ($row = mysqli_fetch_assoc($result)){   
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                    <img src="admin/uploadimg/<?php echo $row['productImage'];?> " alt="" style="width:200px " height="200px">                                        <div class="new-product">
                                           <span>New</span>
                                           </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="single-product.php?id=<?php echo $row['id'];?>"><?php echo $row['productTitle'];?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?php echo $row['productPrice_new']. " $";?></li>
                                                <li class="discount"><?php echo $row['productPrice_old'] ." $";?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      <?php 
                          }
                          ?>
                        </div>
                    </div>
                                            <!-- End New products -->
                                            <!-- Start Featured -->

                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                        <?php
                        $query = "SELECT * FROM products ORDER BY ABS(productPrice_new) DESC limit 6";
                          $result = mysqli_query($conn,$query);
                          while ($row = mysqli_fetch_assoc($result)){   
                            ?>
                         
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                    <img src="admin/uploadimg/<?php echo $row['productImage'];?> " alt="" style="width:200px " height="200px"> 
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="single-product.php?id=<?php echo $row['id'];?>""><?php echo $row['productTitle'];?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?php echo $row['productPrice_new']. " $";?></li>
                                                <li class="discount"><?php echo $row['productPrice_old'] ." $";?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                  <?php 
                          }
                          ?>
                        </div>
                    </div>
                                               <!-- End Featured-->
                    <!-- card foure -->
                                              <!-- Start Offer -->
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="row">
                        <?php
                        $query = "SELECT * FROM products ORDER BY ABS(productPrice_old) DESC limit 6";
                          $result = mysqli_query($conn,$query);
                          while ($row = mysqli_fetch_assoc($result)){   
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                    <img src="admin/uploadimg/<?php echo $row['productImage'];?> " alt="" style="width:200px " height="200px">
                                        <div class="new-product">
                                            <span>Sale </span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="single-product.php?id=<?php echo $row['id'];?>"><?php echo $row['productTitle'];?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?php echo $row['productPrice_new']. " $";?></li>
                                                <li class="discount"><?php echo $row['productPrice_old'] ." $";?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                          }
                          ?>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>