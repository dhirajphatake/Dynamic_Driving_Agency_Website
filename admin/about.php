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
                        <h1 class="font-weight-bold text-uppercase text-center m-4 p-1 font-weight-bold">About Facility</h1>
                    </div>
                        <?php
                        $query="SELECT * FROM about";
                        $fire=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($fire);
                        ?>
                    <div class="col-md-12">
                        <form action="about.php" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Title</label>
                                    <input type="hidden" name="a_id" class="form-control" value="<?=$row['a_id'];?>" required>
                                    <input type="text" name="a_title" class="form-control" value="<?=$row['a_title'];?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Description</label>
                                    <input type="text" name="a_desc" class="form-control" value="<?=$row['a_desc'];?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Small Image</label>
                                    <input type="file" name="a_bigimg" class="form-control">
                                    <input type="hidden" name="a_bigimg" class="form-control" value="<?=$row['a_bigimg'];?>" required>
                                    <img src="upload/<?=$row['a_bigimg'];?>" style="height:100px;" alt="">
                                </div>
                                <div class="col-md-6">
                                    <label class="font-weight-bold text-warning h4">Big Image</label>
                                    <input type="file" name="a_smallimg" class="form-control">
                                    <input type="hidden" name="a_smallimg" class="form-control" value="<?=$row['a_smallimg'];?>" required>
                                    <img src="upload/<?=$row['a_smallimg'];?>" style="height:100px;" alt="">
                                </div>
                                
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center m-4 p-1 font-weight-bold">About Facility</h1>
                        <form action="about.php" method="post" enctype="multipart/form-data">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-12">
                                    <label class="font-weight-bold text-warning h4">Title</label>
                                    <input type="text" name="aw_title" class="form-control" required>
                                </div>                             
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-center">About Facility</h1>
                        <table class="table table-primary table-bordered table-striped table-hover">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Title</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * from aw_details";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {    
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$row['aw_title'];?></td>
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
if (isset($_POST['aw_title'])) {
    $query="INSERT INTO `aw_details`(`aw_title`) VALUES ('".$_POST['aw_title']."')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='about.php';</script>";
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
    $a=rand(1,9999)."about.".$ext[count($ext)-1];
    move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['a_title'])) {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    extract($_POST);
if ($_FILES['a_smallimg']['name']!='') {
$name=$_FILES['a_smallimg']['name'];
$size=$_FILES['a_smallimg']['size'];
$tmp=$_FILES['a_smallimg']['tmp_name'];
$path="upload/";
$a_smallimg=image($name,$size,$tmp,$path);
$path1="upload/".$_POST['a_smallimg'];
unlink($path1);
}
else {
    $a_smallimg=$_POST['a_smallimg'];
}

if ($_FILES['a_bigimg']['name']!='') {
$name=$_FILES['a_bigimg']['name'];
$size=$_FILES['a_bigimg']['size'];
$tmp=$_FILES['a_bigimg']['tmp_name'];
$path="upload/";
$a_bigimg=image($name,$size,$tmp,$path);
$path1="upload/".$_POST['a_bigimg'];
unlink($path1);
}
else {
    $a_bigimg=$_POST['a_bigimg'];
}

// update
$query="UPDATE `about` SET `a_title`='".$a_title."',`a_desc`='".$a_desc."',`a_smallimg`='".$a_smallimg."',`a_bigimg`='".$a_bigimg."' WHERE `a_id`='".$a_id."'";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Updated Successfully');window.location.href='about.php';</script>";
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