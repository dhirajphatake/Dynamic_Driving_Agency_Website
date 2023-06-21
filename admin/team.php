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
                        <h2 class="text-center mt-2 font-weight-bold text-primary">Welcome Team Part</h2>

                        <form action="team.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label>Image:</label>
                                    <input type="file" name="team_img" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Name:</label>
                                    <input type="text" name="team_name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Position:</label>
                                    <input type="text" name="team_position" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Facebook Link:</label>
                                    <input type="text" name="f_link" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Twitter Link:</label>
                                    <input type="text" name="t_link" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Instagram Link:</label>
                                    <input type="text" name="i_link" class="form-control" required>
                                </div>
                                <div class="col-md-12 mt-2 text-center">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                    <div class="col-md-12">
                        <h1 class="text-uppercase text-center text-primary mt-3 bg-warning p-2">Team Member List</h1>
                        <table class="table table-info table-border table-striped table-hover">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Facebook Link</th>
                                <th>Twitter Link</th>
                                <th>Instagram Link</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            // Select process 
                            $query="SELECT * from team";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {
                                // print_r($row);
                                // echo "<pre>";
                                
                            ?>
                            <!-- update process  -->
                            <form action="team.php" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td><?=$i++;?></td>
                                    <td>
                                    <input type="hidden" name="team_id" value="<?=$row['team_id'];?>" class="form-control">
                                    <input type="hidden" name="team_img" value="<?=$row['team_img'];?>" class="form-control">
                                    
                                    <input type="file" name="team_img" class="form-control">
                                    <img src="upload/<?=$row['team_img'];?>" style="height:100px;">
                                    </td>
                                    <td>
                                        <input type="text" name="team_name1" value="<?=$row['team_name'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="team_position" value="<?=$row['team_position'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="f_link" value="<?=$row['f_link'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="t_link" value="<?=$row['t_link'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="i_link" value="<?=$row['i_link'];?>" class="form-control">
                                    </td>
                                    <td>
                                        <a href=""><button class="btn btn-warning">Edit</button></a>
                                        <a href="team.php?deleteid=<?=$row['team_id'];?>^&img=<?=$row['team_img'];?>"><button class="btn btn-danger" onClick="return confirm('Are You Sure! want to delete this record');" type="button">Delete</button></a>
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
$a=rand(1,9999)."team.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}
if (isset($_POST['team_name'])) {
$name=$_FILES['team_img']['name'];
$size=$_FILES['team_img']['size'];
$tmp=$_FILES['team_img']['tmp_name'];
$path="upload/";
$team_img=image($name,$size,$tmp,$path);
    $query="INSERT INTO team(team_name, team_position, f_link, t_link, i_link, team_img) VALUES ('".$_POST['team_name']."','".$_POST['team_position']."','".$_POST['f_link']."','".$_POST['t_link']."','".$_POST['i_link']."','".$team_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>alert('Record Inserted Successfully!');window.location.href='team.php';</script>";
}
else {
    echo "Record Was Not Inserted!";
}
}


// Delete Process
if (isset($_GET['deleteid'])) {
    $query="DELETE FROM team WHERE team_id='".$_GET['deleteid']."'";
    $path='upload/'.$_GET['img'];
    unlink($path);
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Deleted Successfully');window.location.href='team.php';</script>";
    }
    else {
        echo "Something Error! Record Not Deleted";
    }
}



// update process 
if (isset($_POST['team_name1'])) {
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);

    if ($_FILES['team_img']['name']!="") {
$name=$_FILES['team_img']['name'];
$size=$_FILES['team_img']['size'];
$tmp=$_FILES['team_img']['tmp_name'];
$path="upload/";
$team_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['team_img'];
unlink($path1);
}  
else {
    $team_img=$_POST['team_img'];
}
// Update Process
$query="UPDATE team SET team_name='".$_POST['team_name1']."',team_position='".$_POST['team_position']."',f_link='".$_POST['f_link']."',t_link='".$_POST['t_link']."',i_link='".$_POST['i_link']."',team_img='".$team_img."' WHERE team_id='".$_POST['team_id']."'";
$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>alert('Your Data Updated Successfully');window.location.href='team.php';</script>";
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