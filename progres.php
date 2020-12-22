<?php include "include/db.php";?> 


<div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                         
                        <?php
            $psearch =  $_POST['Search'];
            $sql = "SELECT * FROM products WHERE productTitle LIKE '%".$psearch."%' " ;
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_object($result)){     
            ?>
                         
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="admin/uploadimg/<?php echo $row->productImage;?> " alt="" style="width:200px " height="200px">
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
                                        <h4><a href="single-product.php?id=<?php echo $row->id ;?>"><?php echo $row->productTitle;?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li><?php echo $row->productPrice_new. " $";?></li>
                                                <li class="discount"><?php echo $row->productPrice_old. " $";?></li>
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
