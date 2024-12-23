<?php
$title = 'Add Page Content';
include "header.php";
?>

<div class="main-content">
    <section class="section mb-5">
        <div class="section-body">
            <div class="row">
                <h2 class="text-center">Upload Page Content</h2>
                <form action="code/custom-page-store.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 mt-2">
                                    <div class="single-form">
                                        <label for="pagename" class="form-label fw-bold">Select Page Name</label>
                                        <select name="pagename" id="pagename" class="form-select" required>
                                            <option value="">Select Page Name</option>
                                            <option value="English Cafe">English Cafe</option>
                                            <option value="Basic Skills">Basic Skills</option>
                                            <option value="Grvammar">Grammar</option>
                                            <option value="Vocabulary">Vocabulary</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Corporate Interface">Corporate Interface</option>
                                            <option value="Verbal Activity">Verbal Ability</option>
                                            <option value="Train and Trainer">Train and Trainer</option>
                                            <option value="Body Language">Body Language</option>
                                            <option value="Voice and Accent">Voice and Accent</option>
                                            <option value="Articles">Articles</option>
                                            <option value="IELST/PTE">IELST/PTE</option>
                                            <option value="Reveal your Thoughts">Reveal your Thoughts</option>
                                            <option value="Today Session">Today's Session</option>
                                            <option value="Word of Day">Word of Day</option>
                                            <option value="Spellethon">Spellethon</option>
                                            <option value="Strength and Personality">Strength & Personality</option>
                                            <option value="Test your English">Test your English</option>
                                            <option value="Classroom Activity">Classroom Activity</option>
                                            <option value="Interview">Interview</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mt-2">
                                    <div class="single-form">
                                        <label for="heading" class="form-label fw-bold">Heading Quotes</label>
                                        <input class="form-control" id="heading" name="heading" type="text"
                                            placeholder="Write A Heading" required>
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
                                            placeholder="Write A description" required></textarea>
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