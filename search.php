<?php
// Define the getImagePath function
function getImagePath($imageName)
{
    $imageDirectory = "admin/uploads/categories/";

    if (!empty($imageName)) {
        return $imageDirectory . $imageName;
    } else {
        return "assets/img/demo_image.jpg";
    }
}

// Include header.php
include 'header.php';
?>

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
                        <h2 class="title">Search Data</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Search Data</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section upstudy-team-profile-section section-padding">
    <div class="container">
        <div class="team-profile-wrap">
            <?php
            if (isset($_GET['query'])) {
                $search_query = $_GET['query'];

                $sql = "SELECT * FROM custom_pages 
                WHERE pagename LIKE '%$search_query%' 
                OR heading LIKE '%$search_query%' 
                OR description LIKE '%$search_query%'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
            <div class="row pb-4">
                <div class="col-lg-3">
                    <!-- Team Profile Start -->
                    <a href="search_link_data.php?id=' . $row['id'] . '">
                        <div class="team-profile text-center">
                            <div class="profile-img">
                                <img src="' . getImagePath($row['image']) . '" style="height: 250px;  width: 230px;  " alt="">
                            </div>
                            <div class="profile-content">
                                <h4 class="name">' . $row['page_name'] . '</h4>
                                <div class="profile-social">
                                    <h5 class="title">' . $row['heading'] . '</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Team Profile End -->
                </div>
                <div class="col-lg-9">
                    <!-- Team Profile Description Wrap Start -->
                    <div class="team-profile-description-wrap">
                        <!-- Team Profile Description Start -->
                        <div class="team-profile-description">
                            <p> ' . $row['description'] . '</p>
                        </div>
                    </div>
                </div>
            </div>
            ';
                    }
                } else {
                    echo '<div style="height:450px;" class="text-center shadow p-3 mb-5 bg-body rounded">
                    <img class="img-fluid" src="https://media.giphy.com/media/9JLOGsEfPjpR1179HE/giphy.gif" alt="No Results Found GIF" 							style="width: 100% ;height:100%"></div>
                     <h2>No Results Found ..!!</h2>
                    
                    
                    ';
                }
            } else {
                echo '<div style="height:450px;" class="text-center shadow p-3 mb-5 bg-body rounded"> 
                <img src="https://media.giphy.com/media/9JLOGsEfPjpR1179HE/giphy.gif" alt="No Results Found GIF" style="width: 300px;"></div>
                 <h2>No Results Found ..!!</h2>
                ';
            } ?>

        </div>
    </div>
</div>
<?php include 'footer.php'; ?>