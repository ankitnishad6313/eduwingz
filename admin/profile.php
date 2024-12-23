<!-- ========== Start header ========== -->
<?php

$title = 'profile';
include "header.php";

?>
<!-- ========== End header ========== -->

<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <div class="row ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">


                    <div class="card-statistic-4">
                        <div class="row align-items-center justify-content-center">
                           
                            
                            <?php
                            $tb = "SELECT * FROM  `login`";
                            $i = 1;
                            $qry = mysqli_query($conn, $tb);
                            while ($data = mysqli_fetch_assoc($qry)) {
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <img src="uploads/profile/<?= $data['image'] ?>" height="50%" width="50%">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">


                                        <h6>Name : <?= $data['full_name'] ?></h6>
                                        <h6>user id : <?= $data['user_id'] ?></h6>


                                        <button class="edit btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="fa fa-edit" aria-hidden="true"></i> Edit Profile
                                        </button>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php
$tb = "SELECT * FROM `login`";
$i = 1;
$qry = mysqli_query($conn, $tb);
while ($data = mysqli_fetch_assoc($qry)) {
?>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"> <i class="fa fa-user" aria-hidden="true"></i> Edit Profile
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="code/update/profile_update.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" value="<?= $data['id'] ?>" name="id">
                            <div class="mb-3 col-md-6">
                                <label for="edit_name" class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?= $data['full_name'] ?>" name="full_name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">User ID</label>
                                <input type="text" class="form-control" value="<?= $data['user_id'] ?>" name="user_id" placeholder="Enter your user_id">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" value="<?= $data['email'] ?>" name="email" placeholder="Enter your user_id">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" value="<?= $data['mobile'] ?>" name="mobile" placeholder="Enter your user_id">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label">Current Image</label>
                                <input type="file" name="image" class="form-control" value="<?= $data['image'] ?>">
                                <input type="hidden" value="<?= $data['image'] ?>" name="edit_image">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Edit Modal -->
<?php }
?>

<?php include 'footer.php'; ?>