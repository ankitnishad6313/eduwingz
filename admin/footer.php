

<footer class="main-footer">
    <div class="footer-left">
        <a href="#">&copy; Copyright 2024 Eduwingz. All Rights Reserved by Eucoders</a>
    </div>

    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>

<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/datatables.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


<script>
    var textareas = document.querySelectorAll('.editor');

    textareas.forEach(function(textarea) {
        CKEDITOR.replace(textarea);
    });
</script>
<?php
if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
?>
    <script>
        var msg = '<?= $msg ?>';
        Swal.fire(
            'Good job!',
            msg,
            'success'
        )
    </script>
<?php
}
?>
<?php
if (isset($_SESSION['err'])) {
    echo $err = $_SESSION['err'];
    unset($_SESSION['err']);
?>
    <script>
        var err = '<?= $err ?>';
        Swal.fire(
            'Failed!',
            err,
            'error'
        )
    </script>
<?php
}
?>




<div class="modal fade" id="updatePass" tabindex="-1" aria-labelledby="updatePassLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatePassLabel">Change Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="code/update/password_update.php" method="post" onsubmit="return validatePassword();">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="pass" class="col-form-label">Create a new Password</label>
                        <input type="password" name="pass" class="form-control" id="pass" onkeyup="passwordStrength()">
                    </div>
                    <div class="mb-3">
                        <label for="cPass" class="col-form-label">Confirm Password</label>
                        <input type="password" name="cPass" class="form-control" id="cPass" onkeyup="validatePassword()">
                    </div>
                    <progress max="100" value="0" id="strength-meter"></progress>
                    <span id="strength-text"></span>
                    <span id="error" style="color: red;"></span>
                    <div id="requirements" style="color: blue;"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </form>


        </div>
    </div>
</div>

<script>
    function passwordStrength() {
        var pass = document.getElementById("pass").value;
        var cPass = document.getElementById("cPass").value;
        var strengthMeter = document.getElementById("strength-meter");
        var strengthText = document.getElementById("strength-text");
        var requirements = document.getElementById("requirements");

        var hasUppercase = /[A-Z]/.test(pass);
        var hasLowercase = /[a-z]/.test(pass);
        var hasNumber = /\d/.test(pass);
        var hasSpecialChar = /[!@#$%^&*]/.test(pass);
        var isMinLength = pass.length >= 8;
        var isMatched = pass === cPass && cPass !== '';


        var requirementsText = "<strong>Password must:</strong><br>";
        requirementsText += isMinLength ? '<span style="color: green;">- Contain at least 8 characters</span><br>' : '- Contain at least 8 characters<br>';
        requirementsText += hasUppercase ? '<span style="color: green;">- Contain at least one uppercase letter</span><br>' : '- Contain at least one uppercase letter<br>';
        requirementsText += hasLowercase ? '<span style="color: green;">- Contain at least one lowercase letter</span><br>' : '- Contain at least one lowercase letter<br>';
        requirementsText += hasNumber ? '<span style="color: green;">- Contain at least one number</span><br>' : '- Contain at least one number<br>';
        requirementsText += hasSpecialChar ? '<span style="color: green;">- Contain at least one special character (!@#$%^&*)</span><br>' : '- Contain at least one special character (!@#$%^&*)<br>';
        requirementsText += isMatched ? '<span style="color: green;">- Match Confirm Password</span>' : '- Match Confirm Password';

        requirements.innerHTML = requirementsText;

        if (isMinLength && hasUppercase && hasLowercase && hasNumber && hasSpecialChar && isMatched) {
            strengthMeter.value = 100;
            strengthText.innerText = "Strong";
            strengthText.style.color = "green";
        } else {
            strengthMeter.value = 50;
            strengthText.innerText = "Weak";
            strengthText.style.color = "orange";
        }
    }

    function validatePassword() {
        var pass = document.getElementById("pass").value;
        var cPass = document.getElementById("cPass").value;
        var errorSpan = document.getElementById("error");

        if (pass !== cPass || cPass === '') {
            errorSpan.innerText = "Passwords do not match";
            return false;
        }


        errorSpan.innerText = "";

        return true;
    }
</script>
<?php
$tb = "SELECT * FROM `login`";
$i = 1;
$qry = mysqli_query($conn, $tb);
while ($data = mysqli_fetch_assoc($qry)) {
?>

    <script>
        function setImageSrc(imagePath) {
            var imgTags = document.getElementsByClassName("displayedImage");
            for (var i = 0; i < imgTags.length; i++) {
                imgTags[i].src = imagePath;
            }
        }
        setImageSrc("uploads/profile/<?= $data['image'] ?>");
    </script>




<?php } ?>




</body>


</html>