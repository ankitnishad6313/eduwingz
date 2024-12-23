<?php include 'header.php'; ?>

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
                        <h2 class="title">Placement</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Placement</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->


<div class="section contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-wrap">
                    <h3 class="info-title">Contact with us</h3>
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info">
                        <div class="info-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Telephone Number</h5>
							<p><a href="tel: +91 7317670357 ">+91 7317670357 </a></p>
							<p><a href="tel: +91 8173060896">+91 8173060896</a></p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info">
                        <div class="info-icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title"> Mail </h5>
							<p><a href="mailto:Davinder1483@yahoo.com">Davinder1483@yahoo.com</a></p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info">
                        <div class="info-icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Office Location Address</h5>
                            <p>
                                200, Bangali Colony, Sri Om Dental Clinic Building, Near Narendra Ground Airforce Lane, Kanpur - 208007(U.P.) India
                            </p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Contact Form Wrap Start -->
                <div class="contact-form-wrap">
                    <form action="placecode.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="form-control" name="name" type="text" placeholder="Your Name">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="form-control" name="email" type="email" placeholder="Your Email">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="form-control" name="phone" type="text" placeholder="Your Number">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input class="form-control" name="subject" type="text" placeholder="Subject">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-md-12">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <textarea class="form-control" name="message" placeholder="Write A Message"></textarea>
                                </div>
                                <!-- Single Form End -->
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="pdfFile" class="form-label">Upload CV:</label>
                                <input type="file" class="form-control" id="pdfFile" name="pdfFile" accept=".pdf" required>
                            </div>

                            <div class="col-md-12">
                                <!--  Single Form Start -->
                                <div class="form-btn">
                                    <button class="btn" name="submit" type="submit">Submit</button>
                                </div>
                                <!--  Single Form End -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form Wrap End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->








<?php include 'footer.php'; ?>