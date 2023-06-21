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
                        <h1 class="font-weight-bold text-uppercase text-center mt-4">FEATURES</h1>
                    </div>
                        <?php
                        $query="SELECT * FROM features";
                        $fire=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($fire);
                        ?>
                    <div class="col-md-12">
                        <form action="features.php" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Title</label>
                                    <input type="hidden" name="f_id" class="form-control" value="<?=$row['f_id'];?>" required>
                                    <input type="text" name="f_title" class="form-control" value="<?=$row['f_title'];?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Description</label>
                                    <input type="text" name="f_desc" class="form-control" value="<?=$row['f_desc'];?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Small Image</label>
                                    <input type="file" name="f_smallimg" class="form-control">
                                    <input type="hidden" name="f_smallimg" class="form-control" value="<?=$row['f_smallimg'];?>" required>
                                    <img src="upload/<?=$row['f_smallimg'];?>" style="height:100px;" alt="">
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Big Image</label>
                                    <input type="file" name="f_bigimg" class="form-control">
                                    <input type="hidden" name="f_bigimg" class="form-control" value="<?=$row['f_bigimg'];?>" required>
                                    <img src="upload/<?=$row['f_bigimg'];?>" style="height:100px;" alt="">
                                </div>
                                
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">Why Choose Us</h1>
                        <form action="features.php" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Title</label>
                                    <input type="text" name="fw_title" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Description</label>
                                    <input type="text" name="fw_desc" class="form-control" required>
                                </div>                                
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">Why Choose Us List</h1>
                        <table class="table table-primary table-bordered table-striped table-hover">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * from fw_details";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {    
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$row['fw_title'];?></td>
                                <td><?=$row['fw_desc'];?></td>
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
if (isset($_POST['fw_title'])) {
    $query="INSERT INTO `fw_details`(`fw_title`, `fw_desc`) VALUES ('".$_POST['fw_title']."','".$_POST['fw_desc']."')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='features.php';</script>";
    }
    else {
        echo "Something Error! Record Was Not Updated";
    }
}
?>

<?php
// echo "<pre>";
// print_r($_POST);
function image($name,$size,$temp,$path)
{
    $ext=explode(".",$name);
    $a=rand(1,9999)."features.".$ext[count($ext)-1];
    move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['f_title'])) {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    extract($_POST);
if ($_FILES['f_smallimg']['name']!='') {
$name=$_FILES['f_smallimg']['name'];
$size=$_FILES['f_smallimg']['size'];
$tmp=$_FILES['f_smallimg']['tmp_name'];
$path="upload/";
$f_smallimg=image($name,$size,$tmp,$path);
$path1="upload/".$_POST['f_smallimg'];
unlink($path1);
}
else {
    $f_smallimg=$_POST['f_smallimg'];
}

if ($_FILES['f_bigimg']['name']!='') {
$name=$_FILES['f_bigimg']['name'];
$size=$_FILES['f_bigimg']['size'];
$tmp=$_FILES['f_bigimg']['tmp_name'];
$path="upload/";
$f_bigimg=image($name,$size,$tmp,$path);
$path1="upload/".$_POST['f_bigimg'];
unlink($path1);
}
else {
    $f_bigimg=$_POST['f_bigimg'];
}

// update
$query="UPDATE `features` SET `f_title`='".$f_title."',`f_desc`='".$f_desc."',`f_smallimg`='".$f_smallimg."',`f_bigimg`='".$f_bigimg."' WHERE `f_id`='".$f_id."'";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='features.php';</script>";
    }
    else {
        echo "Something Error! Record Was Not Updated";
    }
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