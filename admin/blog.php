<?php

$title = 'Blogs';
include "header.php";

?>




<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Blog</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add Item</button>


                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Heading</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            
                                $tb = "SELECT * FROM  `blog`";
                                $i = 1;
                                $qry = mysqli_query($conn, $tb);
                                while ($data = mysqli_fetch_assoc($qry)) {
                                ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $data['heading'] ?></td>
                                        <td><img style="height:100px; " src="uploads/gallery/<?= $data['image'] ?>" alt="Image"></td>
                                        <td><a href="code/deletecode/blog_d.php?id=<?= $data['id'] ?>"> <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"> Delete</button></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<div class="main-content">


    <!-- basic modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="code/blog.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label for="pdfFile" class="form-label">Heading Quotes</label>
                                    <input class="form-control" name="heading" type="text" placeholder="Write A Heading">
                                </div>
                                <!-- Single Form End -->
                            </div>
                            
                            <div class="col-md-12 mt-2">
                                <label for="pdfFile" class="form-label">Upload IMG</label>
                                <input type="file" class="form-control" id="image" name="image" accept="" required>
                            </div>

                        </div>

                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" name="submit" class="btn btn-primary"> Submit</button>

                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>