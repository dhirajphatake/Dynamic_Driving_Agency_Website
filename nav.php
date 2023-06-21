<?php
include "conn.php";
$query="SELECT * FROM contact_details";
$fire=mysqli_query($conn,$query);
$contact_details=mysqli_fetch_assoc($fire);
// print_r($contact_details);
?>
<div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small><?=$contact_details['c_address'];?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small><?=$contact_details['c_timing'];?></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><?=$contact_details['c_mobile'];?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?=$contact_details['f_Link'];?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?=$contact_details['i_Link'];?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?=$contact_details['t_Link'];?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="<?=$contact_details['l_Link'];?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="feature.php" class="nav-item nav-link">Features</a>
                <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                <a href="team.php" class="nav-item nav-link">Our Team</a>
                <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="admin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Admin Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>