<?php
$title = 'Edit Page Content';
if(!isset($_GET['id'])){
    header('Location:page-content.php');
}
include "header.php";

$id = $_GET['id'];

$sql = "SELECT * FROM `custom_pages` WHERE id = $id";
$res = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($res)
?>

<div class="main-content">
    <section class="section mb-5">
        <div class="section-body">
            <div class="row">
                <h2 class="text-center">Edit <?= $data['pagename'] ?> Content</h2>
                <form action="code/custom-page-update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 mt-2">
                                    <div class="single-form">
                                        <label for="pagename" class="form-label fw-bold">Select Page Name</label>
                                        <select name="pagename" id="pagename" class="form-select" required>
                                            <option value="">Select Page Name</option>
                                            <option value="English Cafe" <?= $data['pagename']== "English Cafe" ? "selected" : "" ?>>English Cafe</option>
                                            <option value="Basic Skills" <?= $data['pagename']== "Basic Skills" ? "selected" : "" ?>>Basic Skills</option>
                                            <option value="Grammar" <?= $data['pagename']== "Grammar" ? "selected" : "" ?>>Grammar</option>
                                            <option value="Vocabulary" <?= $data['pagename']== "Vocabulary" ? "selected" : "" ?>>Vocabulary</option>
                                            <option value="Fashion" <?= $data['pagename']== "Fashion" ? "selected" : "" ?>>Fashion</option>
                                            <option value="Corporate Interface" <?= $data['pagename']== "Corporate Interface" ? "selected" : "" ?>>Corporate Interface</option>
                                            <option value="Verbal Ability" <?= $data['pagename']== "Verbal Ability" ? "selected" : "" ?>>Verbal Ability</option>
                                            <option value="Train and Trainer" <?= $data['pagename']== "Train and Trainer" ? "selected" : "" ?>>Train and Trainer</option>
                                            <option value="Body Language" <?= $data['pagename']== "Body Language" ? "selected" : "" ?>>Body Language</option>
                                            <option value="Voice and Accent" <?= $data['pagename']== "Voice and Accent" ? "selected" : "" ?>>Voice and Accent</option>
                                            <option value="Articles" <?= $data['pagename']== "Articles" ? "selected" : "" ?>>Articles</option>
                                            <option value="IELST/PTE" <?= $data['pagename']== "IELST/PTE" ? "selected" : "" ?>>IELST/PTE</option>
                                            <option value="Reveal your Thoughts" <?= $data['pagename']== "Reveal your Thoughts" ? "selected" : "" ?>>Reveal your Thoughts</option>
                                            <option value="Today Session" <?= $data['pagename']== "Today Session" ? "selected" : "" ?>>Today's Session</option>
                                            <option value="Word of Day" <?= $data['pagename']== "Word of Day" ? "selected" : "" ?>>Word of Day</option>
                                            <option value="Spellethon" <?= $data['pagename']== "Spellethon" ? "selected" : "" ?>>Spellethon</option>
                                            <option value="Strength and Personality" <?= $data['pagename']== "Strength and Personality" ? "selected" : "" ?>>Strength & Personality</option>
                                            <option value="Test your English" <?= $data['pagename']== "Test your English" ? "selected" : "" ?>>Test your English</option>
                                            <option value="Classroom Activity" <?= $data['pagename']== "Classroom Activity" ? "selected" : "" ?>>Classroom Activity</option>
                                            <option value="Interview" <?= $data['pagename']== "Interview" ? "selected" : "" ?>>Interview</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mt-2">
                                    <div class="single-form">
                                        <label for="heading" class="form-label fw-bold">Heading Quotes</label>
                                        <input class="form-control" id="heading" name="heading" type="text"
                                            value="<?= $data['heading'] ?>" placeholder="Write A Heading" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mt-2">
                                    <div class="single-form">
                                        <label for="image" class="form-label fw-bold">Image</label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <div class="single-form">
                                        <label for="description" class="form-label fw-bold">Description</label>
                                        <textarea class="form-control editor" id="description" name="description"
                                            placeholder="Write A description" required><?= $data['description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mx-auto mt-2 mt-3">
                            <input type="submit" name="submit" class="btn btn-primary w-100" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>