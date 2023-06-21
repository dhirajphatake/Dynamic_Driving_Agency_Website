<?php
include ('head.php');
include ('nav.php');
?>

<?php
$query="SELECT * FROM `about`";
$fire=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($fire);
?>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="admin/upload/<?=$row['a_smallimg'];?>" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="admin/upload/<?=$row['a_bigimg'];?>" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4"><?=$row['a_title'];?></h1>
                        <p><?=$row['a_desc'];?></p>
                        <div class="row g-2 mb-4 pb-2">
                            <?php
                            $query1="SELECT * FROM `aw_details`";
                            $fire1=mysqli_query($conn,$query1);
                            while ($row1=mysqli_fetch_assoc($fire1)) {
                            ?>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i><?=$row1['aw_title'];?>
                            </div>
                            <?php
                            };
                            ?>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="#">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:<?=$contact_details['c_mobile'];?>">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3"><?=$contact_details['c_mobile'];?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
                <h1 class="display-6 mb-4">We Have Great Experience Of Driving</h1>
            </div>
            <div class="row g-0 team-items">
            <?php
                $query="SELECT * from team";
                $fire=mysqli_query($conn,$query);
                while ($row=mysqli_fetch_assoc($fire)) {     
                    // print_r($row);           
                ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="admin/upload/<?=$row['team_img'];?> " style="height:300px; width:100%;" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?=$row['f_link'];?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?=$row['t_link'];?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?=$row['i_link'];?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2"><?=$row['team_name'];?></h5>
                            <span><?=$row['team_position'];?></span>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
<?php
include ('footer.php');
?>