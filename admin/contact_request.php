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
                        <h1 class="font-weight-bold text-uppercase text-center mt-4">Contact Request List</h1>
                    </div>
                    <!-- Display Record -->
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            <?php
                            $query="SELECT * FROM contact_data ORDER By c_id DESC";
                            $fire=mysqli_query($conn,$query);
                            $i=1;
                            while ($row=mysqli_fetch_assoc($fire)) {
                            ?>
                            <tr>
                                <td><?=$i++;?></td>
                                <td><?=$row['name'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['subject'];?></td>
                                <td><?=$row['message'];?></td>
                                <td><?=$row['cdate'];?></td>
                                <td>
                                    <a href="contact_request.php?id=<?=$row['c_id'];?>"><button class="btn btn-danger">Delete</button></a>
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
echo $_GET['id'];
if (isset($_GET['id'])) {
    $query="DELETE from contact_data WHERE c_id='".$_GET['id']."'";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "<script>alert('Your Data Has Been Deleted Successfully');window.location.href='contact_request.php';</script>";
    }
    else {
        echo "Something Error! Record Was Not Deleted";
    }
}

?>
