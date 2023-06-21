<?php
include ('head.php');
include ('nav.php');
?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Our Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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