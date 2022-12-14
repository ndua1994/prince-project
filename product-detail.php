<?php
include('db/config.php');
include('includes/header.php');

$prod_id=$_GET['prod_id'];
$detail=mysqli_fetch_array(mysqli_query($conn,"select * from tbl_product where prod_slug='$prod_id'"));
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown"><?=$detail['prod_name']?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$detail['prod_name']?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
         
        
            <div class="row g-4 portfolio-container d-flex justify-content-end ">


                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="<?=BASE_URL_IMG?>product/<?=$detail['prod_img']?>" alt="<?=$detail['prod_img_alt_tag']?>">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4"><?=$detail['prod_name']?></h4>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" >
               <?=$detail['prod_descp']?>
                </div>

              
                
               
            </div>


        </div>
    </div>
    <!-- Projects End -->

<?php
include('includes/footer.php');
?>