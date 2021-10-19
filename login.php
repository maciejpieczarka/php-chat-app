<?php
    session_start();
    if(isset($_SESSION['unique_id'])) {
        header("Location: users.php");
    }
?>

<?php
    include_once "header.php";
?>
<body>
    <main class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form id="form" action="#" autocomplete="off">
                <div id="errorTxt" class="error-txt">This is an error message</div>
                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        <i class="fas fa-eye" id="toggle-icon"></i>
                    </div>
                    <div class="field button">
                        <input id="submitBtn" type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">
                Not yet signed up? <a href="index.php">Sign Up</a>
            </div>
        </section>
    </main>

    <script src="./app/js/password-toggle.js"></script>
    <script src="app/js/login.js"></script>
</body>
</html>