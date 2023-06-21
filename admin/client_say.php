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
                <form action="client_say.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="font-weight-bold text-uppercase text-center mt-4">Client Say</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="row bg-secondary p-5">
                                <div class="col-md-4">
                                    <label class="font-weight-bold text-warning h4">Image</label>
                                    <input type="file" name="client_img" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="font-weight-bold text-warning h4">Name</label>
                                    <input type="text" name="client_name" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="font-weight-bold text-warning h4">Position</label>
                                    <input type="text" name="client_position" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="font-weight-bold text-warning h4">Message</label>
                                    <textarea name="client_message" class="client_message form-control" required></textarea>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn btn-warning">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Display Record -->
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover table-striped">
                            <h1 class="font-weight-bold text-uppercase text-center mt-4">Client Say List</h1>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Message</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * from client_say";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td>
                                    <img src="upload/<?=$row['client_img'];?>" style="height:100px;">
                                </td>
                                <td><?=$row['client_name'];?></td>
                                <td><?=$row['client_position'];?></td>
                                <td><?=$row['client_message'];?></td>
                                <td>
                                    <a href="client_say.php?deleteid=<?=$row['cs_id'];?>^&img=<?=$row['client_img'];?>"><button class="btn btn-danger">Delete</button></a>
                                    <a href=""><button class="btn btn-warning">Edit</button></a>
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

<?php
// echo "<pre>";
// print_r ($_POST);
// print_r ($_FILES);
function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);
$a=rand(1,9999)."client.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['client_name'])) {
    extract($_POST);
$name=$_FILES['client_img']['name'];
$size=$_FILES['client_img']['size'];
$tmp=$_FILES['client_img']['tmp_name'];
$path="upload/";
$client_img=image($name,$size,$tmp,$path);
$query="INSERT INTO client_say(client_name, client_position, client_message, client_img) VALUES ('".$client_name."','".$client_position."','".$client_message."','".$client_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>alert('Record Inserted Successfully!');window.location.href='client_say.php';</script>";
}
else {
    echo "Record Was Not Inserted!";
}
}



// Delete Process
if (isset($_GET['deleteid'])) {
    $query="DELETE FROM client_say WHERE cs_id='".$_GET['deleteid']."'";
    $path='upload/'.$_GET['img'];
    unlink($path);
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Deleted Successfully');window.location.href='client_say.php';</script>";
    }
    else {
        echo "Something Error! Record Not Deleted";
    }
}
?>