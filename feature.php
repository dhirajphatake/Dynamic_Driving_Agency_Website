<?php
include ('head.php');
include ('nav.php');
?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<?php
$query="SELECT * FROM features";
$fire=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($fire);
// print_r($row);
?>
<!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4"><?=$row['f_title'];?></h1>
                    <p class="mb-5"><?=$row['f_desc'];?></p>
                    <div class="row gy-5 gx-4">
                        <?php
                        $query1="SELECT * from fw_details";
                        $fire1=mysqli_query($conn,$query1);
                        $i=1;
                        while ($row1=mysqli_fetch_assoc($fire1)) {    
                            // print_r($row1);
                        ?>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"><?=$row1['fw_title'];?></h5>
                            </div>
                            <span><?=$row1['fw_desc'];?></span>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="admin/upload/<?=$row['f_bigimg'];?>" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="admin/upload/<?=$row['f_smallimg'];?>" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
<?php
include ('footer.php');
?>