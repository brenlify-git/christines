<?php 

include '../config/connection.php';

$sql = "SELECT * FROM feedbacks";

$id = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Christines | Reports</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <style>
        .require {
            color: red;
        }
    </style>

</head>

<body>
    <!-- ======= Sidebar and Header ======= -->
    <?php include '../headerbars/headerbar.php';?>
    <?php include '../sidebars/sidebar.php';
    
   
    ?>


    <!-- End Sidebar and Header-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Reports</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboards/dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Feedback Reports</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
    <div class="row">
        <div class="col-lg-12">

            <!-- table starts here -->

            <div class="card">
                <div class="card-body">
                        <h2 class="card-title">Overall feedback from the visitors.</h2>

                        <?php

                        ?>

                        <div class="overflow-auto mt-4">

                            <!-- Table with stripped rows -->
                            <table class="table table-hover  table-bordered text-center"
                                style="height:200px; overflow:scroll;  vertical-align: center;">
                                <thead class="table-secondary" style="position:sticky; top: 1 ;">
                                    <tr>
                                        <th scope="col">Feedback ID</th>
                                        <th scope="col">Visitor's Name</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date Submitted</th>
                       
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    while($tbl_bookinfo = mysqli_fetch_assoc($id)):   


                                      
                                ?>
                                
                                    <form action="../auth-process/process-food-gallery-show.php" method="post" enctype="multipart/form-data">
                                        <tr>
                                          
                                            <td><?= $tbl_bookinfo['feedbackID'];?></td> 
                                            <td><?= $tbl_bookinfo['username'];?></td>  
                                            <td><?= $tbl_bookinfo['subject'];?></td>   
                                            <td><?= $tbl_bookinfo['message'];?></td>   
                                            <td><?= $tbl_bookinfo['dateSent'];?></td>   
                                          
                                            
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