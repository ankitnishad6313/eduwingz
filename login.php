<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location: ../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Eduwingz - Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="admin/assets/css/app.min.css">
    <link rel="stylesheet" href="admin/assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="admin/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='admin/assets/img/favicon.ico' />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <center>
                                    <img style="margin-left: 50px;" src="admin/assets/img/Eduwingz-removebg-preview.png " />
                                </center>
                            </div>




                            <div class="card-body">
                                <form method="POST" action="admin/code/login.php">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input placeholder="Mobile Number ,Email ,UserId" type="text" class="form-control" name="user_id" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input placeholder="Password" type="text" class="form-control" name="password" tabindex="2" required>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="admin/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="admin/assets/js/custom.js"></script>

    <?php
    if (isset($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    ?>
        <script>
            var msg = '<?= $msg ?>';
            Swal.fire(
                'Good job!',
                msg,
                'success'
            )
        </script>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION['err'])) {
        echo $err = $_SESSION['err'];
        unset($_SESSION['err']);
    ?>
        <script>
            var err = '<?= $err ?>';
            Swal.fire(
                'Faild!',
                err,
                'error'
            )
        </script>
    <?php
    }
    ?>
</body>

</html>