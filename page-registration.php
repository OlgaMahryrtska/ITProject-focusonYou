<?php get_header(); ?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <form action="/action_page.php">
        <div class="container">
            <div class="container signin">
                <p>Already have an account? <a id="sign" href="#">Sign in</a>.</p>
            </div>
            <h1>Join Focus</h1>
            <button>Register with Facebook</button>
            <p> or </p>
            <hr>
            <!--    <label for="firstname">First Name</label>-->
            <input type="text" placeholder="Enter Name" name="firstname" required style="margin-right:1.5%">
            <!--    <label for="secondname">Surname</label>-->
            <input type="text" placeholder="Enter Surname" name="secondname" required>
            <!--    <label for="email"><b>Email</b></label>-->
            <input type="email" placeholder="Enter Email" name="email" required>

            <!--    <label for="psw"><b>Password</b></label>-->
            <input type="password" placeholder="Enter Password" name="psw" required id="passwd">

            <!--    <label for="psw-repeat"><b>Repeat Password</b></label>-->
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required id="rpasswd">
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="button" class="registerbtn" id="submit">Register</button>
        </div>


    </form>

    <script>
        document.getElementById('submit').addEventListener('click', function() {
            var password = document.getElementById("passwd").value;
            var confirmPassword = document.getElementById("rpasswd").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
            }
        }, false)
    </script>

</body>

</html>