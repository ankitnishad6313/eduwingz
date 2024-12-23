<?php
$title = 'Admin Home';
include "header.php";
?>

<div class="main-content">
  <section class="section">
    <div class="row ">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Today contact</h5>
                    <h2 class="mb-3 font-18">
                      <?php $date = date('Y-m-d');
                      echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `contact` WHERE CAST(create_at AS DATE)='$date'"));
                      ?>
                    </h2>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15"> Total Contact</h5>
                    <h2 class="mb-3 font-18">
                      <?php $date = date('Y-m-d');
                      echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `contact` "));
                      ?>
                    </h2>

                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Placement Section -->
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Today Placement</h5>
                    <h2 class="mb-3 font-18">
                      <?php $date = date('Y-m-d');
                      echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `placement` WHERE CAST(create_at AS DATE)='$date'"));
                      ?>

                    </h2>

                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Placement</h5>
                    <h2 class="mb-3 font-18">
                      <?php $date = date('Y-m-d');
                      echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `placement` "));
                      ?>
                    </h2>

                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- End Placement Section -->

    </div>
  </section>
</div>
</div>



<?php include 'footer.php';    ?>