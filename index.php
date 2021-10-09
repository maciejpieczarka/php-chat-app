<?php
    include_once "header.php";
?>
<body>
    <main class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form id="form" action="#" enctype="multipart/form-data" autocomplete="off">
                <div id="errorTxt" class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First name</label>
                        <input type="text" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last name</label>
                        <input type="text" name="lastName" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="fas fa-eye" id="toggle-icon"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input id="submitBtn" type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">
                Already signed up? <a href="login.php">Sign In</a>
            </div>
        </section>
    </main>

    <script src="./app/js/password-toggle.js"></script>
    <script src="app/js/signup.js" type="text/javascript"></script>
</body>
</html>