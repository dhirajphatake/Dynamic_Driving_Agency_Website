<?php
include ('head.php');
include ('nav.php');
include ('conn.php');
?>

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Select process 
                $query="SELECT * from slider";
                $fire=mysqli_query($conn,$query);
                $i=1;
                while ($row=mysqli_fetch_assoc($fire)) {
                    if ($i==1) {
                        $i++;
                ?>
                <div class="carousel-item active">
                    <img class="w-100" src="admin/upload/<?=$row['slider_img'];?>" style="height:855px; background-size:cover; width:100%;" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown"><?=$row['slider_title'];?></h1>
                                    <a href="#" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="#" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }else {                    
                ?>
                <div class="carousel-item">
                    <img class="w-100" src="admin/upload/<?=$row['slider_img'];?>" style="height:855px; background-size:cover; width:100%;" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown"><?=$row['slider_title'];?></h1>
                                    <a href="#" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="#" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <?php
                $query="SELECT * from why_us";
                $fire=mysqli_query($conn,$query);
                $i=1;
                while ($row=mysqli_fetch_assoc($fire)) {    
                ?>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5><?=$row['wu_title'];?></h5>
                                <span><?=$row['wu_desc'];?></span>
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
    <!-- Facts End -->


<!-- About Start -->
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


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tranding Courses</h6>
                <h1 class="display-6 mb-4">Our Courses Upskill You With Driving Training</h1>
            </div>
            <div class="row g-4 justify-content-center">

            <?php
                // Select process 
                $query="SELECT * from courses";
                $fire=mysqli_query($conn,$query);
                $i=1;
                while ($row=mysqli_fetch_assoc($fire)) {
                    // print_r($row);
                    // echo "<pre>";
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?=$row['c_price'];?></div>
                            <h5 class="mb-3"><?=$row['c_title'];?></h5>
                            <p><?=$row['c_desc'];?></p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i><?=$row['c_type'];?></li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i><?=$row['c_duration'];?></li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="admin/upload/<?=$row['c_img'];?>" style="height:300px; width:100%" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Make Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                        <label for="cname">Courses Type</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                        <label for="cage">Car Type</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


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
                ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="admin/upload/<?=$row['team_img'];?>" style="height:250px;" alt="">
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <?php
                        $query="SELECT * from client_say";
                        $fire=mysqli_query($conn,$query);
                        while ($row=mysqli_fetch_assoc($fire)) {
                        ?>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="admin/upload/<?=$row['client_img'];?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4"><?=$row['client_message'];?></p>
                            <hr class="w-25 mx-auto">
                            <h5><?=$row['client_name'];?></h5>
                            <span><?=$row['client_position'];?></span>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
<?php
include ('footer.php');
?>