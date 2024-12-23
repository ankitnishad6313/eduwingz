<?php
$title = 'Contact';
include "header.php";
?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Contact</h4>

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>subject</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tb = "SELECT * FROM  `contact`";
                                $i = 1;
                                $qry = mysqli_query($conn, $tb);
                                while ($data = mysqli_fetch_assoc($qry)) {
                                ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $data['name'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['mobile'] ?></td>
                                        <td><?= $data['subject'] ?></td>
                                        <td><?= $data['message'] ?></td>
                                        <td><a href="code/deletecode/contact_d.php?id=<?= $data['id'] ?>"> <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"> Delete</button></a></td>
                                     
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!---- Footer section------>
<?php
include "footer.php";

?>
<!----  End Footer section------>