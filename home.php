<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="homeStyle.css">
    <title>Home</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <!-- <p>BLOOD BANK.</p> -->
            <p>
               <span style="color: hotpink;">BLOOD</span>
               <span style="color: brown;">BANK.</span>
            </p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Home</a></li>
                
                <li><a href="branchh.php" class="link">Branch</a></li>
                
                <li><a href="about.php" class="link">About</a></li>
                
                <li><a href="feedback.php" class="link">Feedback</a></li>
                
               
                <li><a href="bloodUsage.php" class="link">Blood Usage</a></li>

                
                <li><a href="donationCamp.php" class="link">Donation Camp</a></li>

                
                <li><a href="delivery.php" class="link">Delivery</a></li>

            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
            <button class="btn" id="adminLoginBtn" onclick="adminLogin()">Admin Login</button>
            <!-- <button class="btn" id="staffLoginBtn" onclick="staffLogin()">Staff Login</button> -->
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

    <!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        <!------------------- Sign In form -------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!------------------- Sign Up form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Name">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Blood Type">
                    <i class="bx bx-droplet"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>

        <!------------------- Admin Login form -------------------------->
        <div class="admin-login-container" id="adminLogin">
            <div class="top">
                <!-- <span>Are you a staff? <a href="#" onclick="staffLogin()">Staff Login</a></span> -->
                <header>Admin Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Admin Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Login">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="admin-login-check">
                    <label for="admin-login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>

        <!------------------- Staff Login form -------------------------->
        <!-- <div class="staff-login-container" id="staffLogin">
            <div class="top">
                <span>Are you an admin? <a href="#" onclick="adminLogin()">Admin Login</a></span>
                <header>Staff Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Staff Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Login">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="staff-login-check">
                    <label for="staff-login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div> -->


    </div>
</div>

<script>
    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if (i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var c = document.getElementById("adminLoginBtn");
    // var d = document.getElementById("staffLoginBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("adminLogin");
    // var w = document.getElementById("staffLogin");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        z.style.right = "-520px";
        w.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        c.className = "btn";
        d.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
        z.style.opacity = 0;
        w.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        z.style.right = "-520px";
        w.style.right = "-520px";
        a.className = "btn";
        b.className += " white-btn";
        c.className = "btn";
        d.className = "btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
        z.style.opacity = 0;
        w.style.opacity = 0;
    }

    function adminLogin() {
        x.style.left = "-510px";
        y.style.right = "-520px";
        z.style.right = "5px";
        w.style.right = "-520px";
        a.className = "btn";
        b.className = "btn";
        c.className += " white-btn";
        d.className = "btn";
        x.style.opacity = 0;
        y.style.opacity = 0;
        z.style.opacity = 1;
        w.style.opacity = 0;
    }

    // function staffLogin() {
    //     x.style.left = "-510px";
    //     y.style.right = "-520px";
    //     z.style.right = "-520px";
    //     w.style.right = "5px";
    //     a.className = "btn";
    //     b.className = "btn";
    //     c.className = "btn";
    //     d.className += " white-btn";
    //     x.style.opacity = 0;
    //     y.style.opacity = 0;
    //     z.style.opacity = 0;
    //     w.style.opacity = 1;
    // }
</script>
</body>
</html>