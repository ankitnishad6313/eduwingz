<?php include 'header.php' ?>
<?php
$id = $_GET['id']; 
$tb = "SELECT * FROM `dynamic_pages` where id='$id'";
$i = 1;
$qry = mysqli_query($conn, $tb);
while ($data = mysqli_fetch_assoc($qry)) {
?>
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
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content">

                <h2 class="title"><?= $data['page_name'] ?></h2>

                <p class="text"><?= $data['heading'] ?></p>

                <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="assets/images/team/dxs.jpg" alt="Author">
                        </div>
                        <div class="meta-name">
                            <p class="name">Davinder Kaur Saxen</p>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course Details Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-8">

                    <!-- Course Details Wrapper Start -->
                    <div class="course-details-wrapper">

                        <!-- Course Overview Start -->
                        <?= $data['description'] ?>

                        <!-- Course Lessons Start -->
                        <div class="course-lessons">


                            <!-- Course Accordion Start -->
                            <?php if (!empty($data['file_title']) && !is_null($data['file'])) : ?>
                                <div class="course-accordion accordion" id="accordionCourse">
                                    <div class="accordion-item">
                                        <button data-bs-toggle="collapse" data-bs-target="#collapseOne"> <?= $data['file_title'] ?> 											</button>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionCourse">
                                            <div class="accordion-body">
                                                <ul class="lessons-list">
                                                    <?php
                                                    $files = explode(',', $data['file']);
                                                    foreach ($files as $index => $file) {
                                                        echo '<li><a target="_blank" href="admin/uploads/categories/' . $file . '"><i 															class="fa fa-file"></i> File ' . ($index + 1) . '</a></li>';
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Course Accordion End -->

                        </div>
                        <!-- Course Lessons End -->


                    </div>
                    <!-- Course Details Wrapper End -->

                </div>

                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wrap">

                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-video">
                                <?php
                                function getImagePath($imageName)
                                {

                                    $imageDirectory = "admin/uploads/categories/";


                                    if (!empty($imageName)) {

                                        return $imageDirectory . $imageName;
                                    } else {

                                        return "assets/img/demo_image.jpg";
                                    }
                                }
                                ?>
                                <img src="<?= getImagePath($data['image']) ?>" style="height: 100%; width: 100%;" alt="">

                                <?php if (!empty($data['youtube'])) : ?>
                                    <a href="<?= $data['youtube'] ?>" class="popup-video play"><i class="fa fa-play"></i></a>
                                <?php endif; ?>

                            </div>
                            <div class="sidebar-description">
                                <div class="price-wrap">

                                    <div class="price">
                                        <?php if (!empty($data['mrp'])) : ?>
                                            <span class="label">Price :</span>
                                            <span class="sale-price">&#x20B9;<?= $data['mrp'] ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($data['prise'])) : ?>
                                            <span class="regular-price">&#x20B9;<?= $data['prise'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <ul class="description-list">
                                    <?php if (!empty($data['duration'])) : ?>
                                        <li><i class="flaticon-wall-clock"></i> Duration <span><?= $data['duration'] ?></span></li>
                                    <?php endif; ?>
                                    <?php if (!empty($data['level'])) : ?>
                                        <li><i class="fas fa-sliders-h"></i> Level <span><?= $data['level'] ?></span></li>
                                    <?php endif; ?>
                                    <?php if (!empty($data['language'])) : ?>
                                        <li><i class="fas fa-language"></i> Language <span><?= $data['language'] ?></span></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->


                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>


        </div>
    </div>
    <!-- Course Details End -->
<?php } ?>
<?php include 'footer.php' ?>