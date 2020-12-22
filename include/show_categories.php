<?php include "include/db.php";?>
<section class="category-area section-padding30">
    <div class="container-fluid">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center mb-85" id="category1">
                    <h2>Shop by Category</h2>
                </div>
            </div>
        </div>
    
        <div class="row">
        <?php 
         
         $query = "SELECT * FROM categories";
               $result = mysqli_query($conn,$query);
               while ($row = mysqli_fetch_assoc($result)){  
         ?> 
            <div class="col-xl-4 col-lg-6">
   
                <div class="single-category mb-30">
         
                    <div class="category-img">
      
                        <img src="admin/uploadimg/<?php echo $row['categoryImage'];?>" alt="" style="width:340px " height="280px">
                        <div class="category-caption">
                          <a href="product_list.php?category_id=<?php echo $row['id'];?>">  <h2><?php echo $row['categoryCaption'];?></h2></a>
                            <span class="best"><a href="#"><?php echo $row['categoryName'];?></a></span>
                            <span class="collection"><?php echo $row ['categoryDesc'];?></span>
                        </div>
                        
         
                    </div>
        

                </div>        
                </div>
                <?php   
        }
        ?>
        </div>
     
    </div>

</section>