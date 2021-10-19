<?php
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>

<?php
    include_once "header.php";
?>
<body>
    <main class="wrapper">
        <section class="chat-area">
           <header>
                <?php
                    include_once "app/php/configuration.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    //! If chat.php is typed manually without user_id, move to users.php
                    if(empty($user_id)) {
                        header('Location: users.php');
                    }
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
               ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="app/php/images/<?php echo $row['img'];?>" alt="">
                <div class="details">
                    <span><?php echo $row['firstName']." ".$row['lastName'];?></span>
                    <p><?php echo $row['status'];?></p>
                </div>
           </header>

           <div id="chat-box" class="chat-box">
                
           </div>
            <form action="" method="POST" class="typing-area" autocomplete="off" >
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" id="input-field" placeholder="Type a message...">
                <button id="send-btn"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </main>

    <script src="app/js/chat.js"></script>
</body>
</html>