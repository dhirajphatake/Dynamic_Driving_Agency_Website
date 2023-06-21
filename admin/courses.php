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
                        <h2 class="text-center mt-2 font-weight-bold text-primary">COURSES</h2>

                        <form action="courses.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label>Image:</label>
                                    <input type="file" name="c_img" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Title:</label>
                                    <input type="text" name="c_title" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Description:</label>
                                    <input type="text" name="c_desc" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Course Price:</label>
                                    <input type="text" name="c_price" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Course Type:</label>
                                    <input type="text" name="c_type" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Duration:</label>
                                    <input type="text" name="c_duration" class="form-control" required>
                                </div>
                                <div class="col-md-12 mt-2 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-uppercase text-center text-primary mt-3 bg-warning p-2">courses Member List</h1>
                        <table class="table table-info table-border table-striped table-hover">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Duration</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            // Select process 
                            $query="SELECT * from courses";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {
                                // print_r($row);
                                // echo "<pre>";
                                
                            ?>
                            <!-- update process  -->
                            <form action="courses.php" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td><?=$i++;?></td>
                                    <td>
                                    <input type="hidden" name="c_id" value="<?=$row['c_id'];?>" class="form-control">
                                    <input type="hidden" name="c_img" value="<?=$row['c_img'];?>" class="form-control">
                                    
                                    <input type="file" name="c_img" class="form-control">
                                    <img src="upload/<?=$row['c_img'];?>" style="height:100px;">
                                    </td>
                                    <td>
                                        <input type="text" name="c_title1" value="<?=$row['c_title'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="c_desc" value="<?=$row['c_desc'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="c_price" value="<?=$row['c_price'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="c_type" value="<?=$row['c_type'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="c_duration" value="<?=$row['c_duration'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <a href=""><button class="btn btn-warning">Edit</button></a>
                                        
                                        <a href="courses.php?deleteid=<?=$row['c_id'];?>&img=<?=$row['c_img'];?>"><button class="btn btn-danger" onClick="return confirm('Are You Sure! want to delete this record');" type="button">Delete</button></a>
                                    </td>
                                </tr>
                            </form>
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

<?php
// Insert Process
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);
$a=rand(1,9999)."course.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// exit();
if (isset($_POST['c_title'])) {
extract($_POST);
$name=$_FILES['c_img']['name'];
$size=$_FILES['c_img']['size'];
$tmp=$_FILES['c_img']['tmp_name'];
$path="upload/";
$c_img=image($name,$size,$tmp,$path);
$query="INSERT INTO `courses`(`c_title`, `c_desc`, `c_price`, `c_type`, `c_duration`, `c_img`) VALUES ('".$c_title."','".$c_desc."','".$c_price."','".$c_type."','".$c_duration."','".$c_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>alert('Record Inserted Successfully!');window.location.href='courses.php';</script>";
}
else {
    echo "Record Was Not Inserted!";
}
}




// Delete Process
if (isset($_GET['deleteid'])) {
    $query="DELETE FROM courses WHERE c_id='".$_GET['deleteid']."'";
    $path='upload/'.$_GET['img'];
    unlink($path);
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Deleted Successfully');window.location.href='courses.php';</script>";
    }
    else {
        echo "Something Error! Record Not Deleted";
    }
}



// update process 
if (isset($_POST['c_title1'])) {
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);

    if ($_FILES['c_img']['name']!="") {
$name=$_FILES['c_img']['name'];
$size=$_FILES['c_img']['size'];
$tmp=$_FILES['c_img']['tmp_name'];
$path="upload/";
$c_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['c_img'];
unlink($path1);
}  
else {
    $c_img=$_POST['c_img'];
}
// Update Process
$query="UPDATE courses SET c_title='".$_POST['c_title1']."',c_desc='".$_POST['c_desc']."',c_price='".$_POST['c_price']."',c_type='".$_POST['c_type']."',c_duration='".$_POST['c_duration']."',c_img='".$c_img."' WHERE c_id='".$_POST['c_id']."'";
$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>alert('Your Data Updated Successfully');window.location.href='courses.php';</script>";
}
else {
    echo "Something Error! Record Not Update";
}
}
?>


<!-- img 
name 
position 
f link
t link 
i link  -->