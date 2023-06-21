<?php include "head.php"; ?>
<?php include "conn.php"; ?>
</head>
<body class="mod-bg-1 ">
    <div class="page-wrapper">
        <div class="page-inner">
        <?php include "nav.php"; ?>
        <div class="page-content-wrapper">
        <?php include "nav1.php"; ?>
        <main id="js-page-content" role="main" class="page-content" style="padding:0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="font-weight-bold text-uppercase text-center mt-4">why Us</h1>
                    </div>  

                    <div class="col-md-12">
                        <h1 class="text-center">Why Us</h1>
                        <form action="why_us.php" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Title</label>
                                    <input type="text" name="wu_title" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Description</label>
                                    <input type="text" name="wu_desc" class="form-control" required>
                                </div>                                
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">Why Us List</h1>
                        <table class="table table-primary table-bordered table-striped table-hover">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * from why_us";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {    
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$row['wu_title'];?></td>
                                <td><?=$row['wu_desc'];?></td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                    <button class="btn btn-warning">Edit</button>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                 
                </div>
            </div>
        </main>
        </div>
        </div>
        </div>
        <?php include "footer.php"; ?>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
    </body>
</html>
<!-- insert  -->
<?php
if (isset($_POST['wu_title'])) {
    $query="INSERT INTO `why_us`(`wu_title`, `wu_desc`) VALUES ('".$_POST['wu_title']."','".$_POST['wu_desc']."')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='why_us.php';</script>";
    }
    else {
        echo "Something Error! Record Was Not Updated";
    }
}
?>

<?php
// echo "<pre>";
// print_r($_POST);
// update
$query="UPDATE `why_us` SET `f_title`='".$f_title."',`f_desc`='".$f_desc."',`f_smallimg`='".$f_smallimg."',`f_bigimg`='".$f_bigimg."' WHERE `f_id`='".$f_id."'";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='why_us.php';</script>";
    }
    else {
        echo "Something Error! Record Was Not Updated";
    }
?>












<!-- 
Contact 

address
office timing
mobile number
facebook
instagram
linked in 
twitter
youtube
email
map -->