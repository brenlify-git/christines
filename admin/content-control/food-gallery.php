<?php 

include '../config/connection.php';



$sql = "SELECT * FROM imagegallery";

$id = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>InFuse | Patron Masterlist</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/table.css">

</head>

<body>

    <!-- ======= Sidebar and Header ======= -->

    <?php include '../headerbars/headerbar.php';?>
    <?php include '../sidebars/sidebar.php';
    
   
    ?>

    <!-- End Sidebar and Header-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cash Out Report Generation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboards/dashboard.php">Home</a></li>
                    <li class="breadcrumb-item">Report Generation</li>
                    <li class="breadcrumb-item active">Cash Out Report Generation</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
    <div class="row">
        <div class="col-lg-12">

            <!-- table starts here -->

            <div class="card">
                <div class="card-body">
                        <h2 class="card-title">This table displays the records of cashout transactions</h2>

                        <div class="overflow-auto mt-4">

                            <!-- Table with stripped rows -->
                            <table class="table table-hover  table-bordered text-nowrap text-center"
                                style="height:200px; overflow:scroll;  vertical-align: center;">
                                <thead class="table-secondary" style="position:sticky; top: 1 ;">
                                    <tr>
                                        <th scope="col">Image ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">New File Upload</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    while($tbl_bookinfo = mysqli_fetch_assoc($id)):   
                                ?>
                                
                                    <form action="../auth-process/process-food-gallery.php" method="post" enctype="multipart/form-data">
                                        <tr>
                                            <input type="hidden" name="galleryID" value="<?=$tbl_bookinfo['galleryID'];?>">
                                            <td class="align-middle"><b><h4><?= $tbl_bookinfo['galleryID'];?></h4></b></td>
                                            <td ><img src="<?= "../../".$tbl_bookinfo['imagePath']; ?>" alt="" style="width:200px;"></td>   
                                            <td class="align-middle"><input class="form-control" type="file" id="newImagePath" name="newImagePath" required> </td>

                                            <td class="align-middle">
                                                <button type="submit" class="btn btn-success"><i class="bi bi-arrow-clockwise"></i> Update Image</button>
                                            </td>     
                                            
                                        </tr>
                                    </form>                                

                                <?php
                                    endwhile;
                                ?>


                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>

                  
                </div>
            </div>
        </div>



    </div>
</section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



</body>

</html>