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
        <section class="users">
           <header>
               <?php
                    include_once "app/php/configuration.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
               ?>
                <div class="content">
                    <img src="app/php/images/<?php echo $row['img'];?>" alt="">
                    <div class="details">
                        <span><?php echo $row['firstName']." ".$row['lastName'];?></span>
                        <p><?php echo $row['status'];?></p>
                    </div>
                </div>
                <a href="app/php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
           </header>
           <div class="search">
               <span class="text">Select an user to start chat</span>
               <input type="text" name="" id="searchBar" placeholder="Enter name to search...">
               <button id="searchBtn"><i class="fas fa-search"></i></button>
           </div>
           <div id="users-list" class="users-list">
              
           </div>
        </section>
    </main>

    <script src="./app/js/users.js"></script>
</body>
</html>