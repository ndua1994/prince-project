<?php
include('db/config.php');
include('includes/header.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Product</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
         
        
            <div class="row g-4 portfolio-container">


<?php
$query=mysqli_query($conn,"select * from tbl_product where is_active=1");
while($row=mysqli_fetch_array($query))
{
?>
                
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="<?=BASE_URL_IMG?>product/<?=$row['prod_img']?>" alt="<?=$row['prod_img_alt']?>">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4"><?=$row['prod_name']?></h4>
                            <div class="d-flex">
                              
                                <a class="btn btn-lg-square rounded-circle mx-2" href="<?=BASE_URL.'product/'.$row['prod_slug']?>"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
<?php }?>

                
               
            </div>
        </div>
    </div>
    <!-- Projects End -->

<?php
include('includes/footer.php');
?>