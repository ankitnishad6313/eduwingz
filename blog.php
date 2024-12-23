<?php include 'header.php'   ?>


<!-- Page Banner Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
    <div class="shape-1">
        <img src="assets/images/shape/shape-7.png" alt="">
    </div>
    <div class="shape-2">
        <img src="assets/images/shape/shape-1.png" alt="">
    </div>
    <div class="shape-3"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Blog</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Blog Start -->
<div class="section upstudy-blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 ">
                <?php 
                $sql = "SELECT * FROM blog";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="#"><img src="admin/uploads/gallery/<?php echo $data['image'] ?> " 
														   style="height: 100%; width: 100%; " alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><?php echo $data['heading'] ?> </h3>
                            </div>
                        </div>
                        </div>
                <?php }
                }
                ?>

        </div>

        <!-- Blog Wrap End -->
    </div>
</div>
<!-- Blog End -->


<?php include 'footer.php'   ?>