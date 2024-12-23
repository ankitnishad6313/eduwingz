<?php include 'header.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">


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
                        <h2 class="title">Gallery</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<div class="section upstudy-team-section section-padding">
    <div class="container">
        <div class="team-wrap">
            <div class="row">
                <?php
                $tb = "SELECT * FROM `gallery`";
                $qry = mysqli_query($conn, $tb);
                while ($data = mysqli_fetch_assoc($qry)) {
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Team Start -->
                        <div class="single-team-02">
                            <div class="team-img">
                                <a href="admin/uploads/gallery/<?= $data['image'] ?>" data-lightbox="gallery"><img src="admin/uploads/gallery/<?= $data['image'] ?>" alt=""></a>
                            </div>
                        </div>
                        <!-- Single Team End -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>