<?php
$title = 'Interview';
include "header.php";
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <h2>Interview</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Image</th>
                                <th>Heading</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tb = "SELECT * FROM `custom_pages` WHERE `pagename` = 'Interview'";
                            $i = 1;
                            $qry = mysqli_query($conn, $tb);
                            while ($data = mysqli_fetch_assoc($qry)) {
                                ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><img src="uploads/custom_pages/<?= $data['image'] ? $data['image'] : "dummy.jpg" ?>"
                                            style="height:100px; width:100px; object-fit:contain;" alt=""></td>
                                    <td><?= $data['heading'] ?></td>
                                    <td class="text-center">
                                        <a href="page-content-edit.php?id=<?= $data['id'] ?>">
                                            <button class="btn btn-warning w-25">
                                                Edit
                                            </button>
                                        </a>
                                        <a href="code/custom-page-delete.php?id=<?= $data['id'] ?>">
                                            <button onclick="return confirm('Are you sure to delete?')"
                                                class="btn btn-danger ms-2 w-25">
                                                Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>

<?php include 'footer.php'; ?>