    <!-- Footer Start -->
    <div class="footer-section section">
    <div class="container">

        <!-- Footer Widget Wrapper Start -->
        <div class="footer-widget-wrap">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget widget-about">
                        <div class="footer-logo">
                            <a href="index.php"><img class="displayedImage" src="" alt="logo" style="width:200px"></a>
                        </div>
                        <p class="text" data-aos="fade-up" data-aos-delay="0"><img src="assets/images/energy.png" alt=""> Unlock Growth Potential </p>

                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Link</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="index.php">Home </a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="english.php">English Cafe</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Study material</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="basic_skill.php">Basic Skill</a></li>
                                <li><a href="grammer.php">Grammer</a></li>
                                <li><a href="vocabulary.php">Vocabulary</a></li>
                                <li><a href="fashion.php">Fashion</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-lg-3 col-sm-6">

                    <!-- <div class="widget-info widget-info-2 "> -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li>
                                    <a href="tel:+91 7317670357">+91 7317670357</a>
                                </li>
                                
                                <li>
                                    <a href="tel:+91 8173060896">+91 8173060896</a>
                                </li>
                                
                                <li class="info-content">
                                    <a href="https://maps.app.goo.gl/mJeChvnfhphPbcXg9">
                                        200, Bangali Colony, Sri Om Dental Clinic Building, Near Narendra Ground Airforce Lane, Kanpur - 208007(U.P.) India
                                    </a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- Footer Widget Wrapper End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="copyright-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <!-- Footer Copyright Text Start -->
                            <div class="copyright-text">
                                <p>&copy;<?php echo date('Y') ?> All Rights Reserved Eduwingz. Design & Developed by Team <a href="https://www.eucoders.org/" target="_blank">Eucoders</a></p>
                            </div>
                            <!-- Footer Copyright Text End -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
    <!-- Footer End -->

    <!-- Whatsapp Floating Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://chat.whatsapp.com/BY1rK509dZgI2IXsMrWINl" class="whatsapp" target="_blank">
        <i class="fa fa-whatsapp my-whatsapp"></i>
    </a>
    <!-- Whatsapp Floating Icon -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

</div>

</div>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/plugins/waypoints.min.js"></script>
<script src="assets/js/plugins/jquery.counterup.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/back-to-top.js"></script>
<script src="assets/js/plugins/jquery.powertip.min.js"></script>
<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>


<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script>
	const triggerTabList = document.querySelectorAll('#grammar button')
		triggerTabList.forEach(triggerEl => {
		  const tabTrigger = new bootstrap.Tab(triggerEl)

		  triggerEl.addEventListener('click', event => {
			event.preventDefault()
			tabTrigger.show()
		  })
		});
</script>
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
    $err = $_SESSION['err'];
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


<?php
$tb = "SELECT * FROM `login`";
$i = 1;
$qry = mysqli_query($conn, $tb);
while ($data = mysqli_fetch_assoc($qry)) {
?>
    <script>
        function setImageSrc(imagePath) {
            var imgTags = document.getElementsByClassName("displayedImage");
            for (var i = 0; i < imgTags.length; i++) {

                imgTags[i].src = imagePath;
            }
        }
        setImageSrc("admin/uploads/profile/<?= $data['image'] ?>");
    </script>
<?php } ?>


</body>


</html>