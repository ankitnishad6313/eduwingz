<?php
$title = 'Grammar';
include "header.php";
$id = $_GET['id'];
$tb = "SELECT * FROM `grammar` WHERE id = '$id'";
$qry = mysqli_query($conn, $tb);
$data = mysqli_fetch_assoc($qry);
?>

<div class="main-content">
    <section class="section mb-5">
        <div class="section-body">
			<h2>Edit Grammar <?= $data['heading'] ?></h2>
            <div class="row">
                <form action="code/update/grammar.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                   <input value="<?php echo $_GET['id'] ?>" name="id" type="hidden">
                                    <div class="col-12 col-lg-12 mt-2">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label for="heading" class="form-label">Heading Quotes</label>
                                            <input class="form-control" id="heading" name="heading" value="<?= $data['heading'] ?>" type="text"
                                                placeholder="Write A Heading">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control editor" id="description" name="description"
                                                placeholder="Write A description"><?= $data['description'] ?></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mx-auto mt-2 mt-3">
                            <input type="submit" name="submit" class="btn btn-primary w-100" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
	
</div>
<?php include 'footer.php'; ?>