<?php include 'header.php' ?>
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

      <h2 class="title">Grammar</h2>
      <div class="course-details-meta">
        <div class="meta-action">
          <div class="meta-author">
            <img src="assets/images/team/dxs.jpg" alt="Author">
          </div>
          <div class="meta-name">
            <p class="name">Davinder Kaur Saxena</p>
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
      <div class="col-12 col-lg-4">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <?php
          include ('code/db.php');
          $tb = "SELECT * FROM `custom_pages` WHERE `pagename` = 'Grammar'";
          $i = 1;
          $qry = mysqli_query($conn, $tb);
          while ($data = mysqli_fetch_assoc($qry)) {
            ?>
            <button class="nav-link <?= ($i == 1) ? "active" : "" ?>" id="page-section-tab<?= $data['id'] ?>"
              data-bs-toggle="pill" data-bs-target="#page-section<?= $data['id'] ?>" type="button" role="tab"
              aria-controls="page-section<?= $data['id'] ?>" aria-selected="<?= ($i == 1) ? "true" : "false" ?>">
              <?= $data['heading'] ?>
            </button>
            <?php
            $i++;
          }
          ?>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="tab-content" id="v-pills-tabContent">
          <?php
          // Resetting the result pointer to the beginning
          mysqli_data_seek($qry, 0);
          $i = 1;
          while ($data1 = mysqli_fetch_assoc($qry)) {
            ?>
            <div class="tab-pane fade <?= ($i == 1) ? "show active" : "" ?>" id="page-section<?= $data1['id'] ?>"
              role="tabpanel" aria-labelledby="page-section-tab<?= $data1['id'] ?>" tabindex="0">
              <?php
              if (isset($data1['image'])) {
                ?>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="admin/uploads/custom_pages/<?= $data1['image'] ?>" alt="" class="img-fluid">
                  </div>
                </div>
                <?php
              }
              ?>
              <?= $data1['description'] ?>
            </div>
            <?php
            $i++;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Course Details End -->
  <?php include 'footer.php' ?>