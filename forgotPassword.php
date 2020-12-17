<?php
include "templates\header.php";
?>
<!DOCTYPE html>
<html lang="en">
<section class="app-wrap">
    <br>
    <br>
        <form action="" class="white container" id="forgotPasswordForm">
            <h5>The last password you remember:</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" placeholder="Password" type="password" class="validate">
                    <!-- <label for="password">Password</label> -->
                </div>
            </div>
            <h5>Your registered Email</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" placeholder="Email" type="email" class="validate">
                    <!-- <label for="email">Email</label> -->
                </div>
            </div>
            <div class="center">
                <button class="btn-small cyan lighten-2 waves-effect waves-light" type="submit" name="action">Submit </button>
            </div>
            

            </div>
        </form>
    </section>

    <script>
        document.getElementById("forgotPasswordForm").onsubmit = function() {SentToMail()};

        function SentToMail() {
            alert("Instructions have been sent to your mail.");
        }
    </script>
</html>

<?php include "templates/footer.php"; ?>