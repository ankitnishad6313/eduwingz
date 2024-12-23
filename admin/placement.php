<?php

$title = 'Placement';
include "header.php";

?>


<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Placement</h4>
            </div>
            <div class="card-body">



              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>CV</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $tb = "SELECT * FROM  `placement`";
                    $i = 1;
                    $qry = mysqli_query($conn, $tb);
                    while ($data = mysqli_fetch_assoc($qry)) {
                    ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['phone'] ?></td>
                        <td><?= $data['subject'] ?></td>
                        <td><?= $data['message'] ?></td>
                        <td><a href="../uploads/<?= $data['pdf'] ?>">View CV</a></td>
                        <td><a href="code/deletecode/place_d.php?id=<?= $data['id'] ?>"> <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"> Delete</button></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>



<?php include 'footer.php';    ?>