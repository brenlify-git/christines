
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Christine's | Logo Branding</title>
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
            <h1>Update Logo and Branding</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboards/dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Logo and Branding</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">LTO COR Details </h5>

                            <?php

                                if(isset($_SESSION['logoStatus'])){
                            ?>

                                <div class="alert alert-warning text-center">
                                <b><i class="bi bi-exclamation-diamond-fill"></i> <?= $_SESSION['logoStatus']; ?></b> 
                                </div>
                            <?php
                                }

                                unset($_SESSION['logoStatus']);

                            ?>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="../auth-process/process-logo-branding.php" method="post" enctype="multipart/form-data">

                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Business Name <span class="require">*</span></label>
                                    <input type="text" class="form-control" id="businessName" name="businessName" value=""
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="formFile" class="form-label">Upload the new logo file <span class="require">*</span></label>
                                    <input class="form-control" type="file" id="imageLogo" name="imageLogo" required>
                                </div>

                                <div class="text-center" style="margin-top: 30px;">
                                    <button type="submit" class="btn btn-success col-md-3"><i class="bi bi-archive"></i>
                                        Save Changes</button>
                                    <button type="reset" class="btn btn-primary col-md-3"><i class="bi bi-x-circle"></i>
                                        Clear</button>
                                </div>
                            </form><!-- End Multi Columns Form -->



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