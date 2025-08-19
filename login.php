<?php
include("includes/db.php");
if(!empty($_SESSION['login'])) {
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MediSlot</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Link to the CSS file in the css/ directory -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <!-- Register -->
            <form action="includes/maincontroller.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social" title="Sign up with Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social" title="Sign up with Google"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social" title="Sign up with LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password"/>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>

        <!-- Login -->
        <div class="form-container sign-in-container">
            <form action="includes/maincontroller.php" method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="signin">Sign In</button>
                <?php
                    if (isset($_SESSION['success'])) {
                    echo '<div style="color:green;">'
                    . $_SESSION['success'] .
                    '</div>';
                    unset($_SESSION['success']);
                    }

                    if (isset($_SESSION['error'])) {
                    echo '<div style="color:red;">'
                    . $_SESSION['error'] .
                    '</div>';
                    unset($_SESSION['error']); 
                    }
                ?>

            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!-- This JavaScript handles the sliding animation -->
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => 
            container.classList.add('right-panel-active'));

        signInButton.addEventListener('click', () => 
            container.classList.remove('right-panel-active'));
    </script>
</body>
</html>
