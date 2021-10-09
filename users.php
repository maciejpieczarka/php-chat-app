<?php
    include_once "header.php";
?>
<body>
    <main class="wrapper">
        <section class="users">
           <header>
               <?php
                 
               ?>
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                        <span>Gabriela Wróblewska</span>
                        <p>Active now</p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
           </header>
           <div class="search">
               <span class="text">Select an user to start chat</span>
               <input type="text" name="" id="searchBar" placeholder="Enter name to search...">
               <button id="searchBtn"><i class="fas fa-search"></i></button>
           </div>
           <div class="users-list">
               <a href="#">
                   <div class="content">
                       <img src="./app/img/profile-pic.jpg" alt="">
                       <div class="details">
                            <span>Ola Biała</span>
                            <p>Test message</p>
                        </div>
                   </div>
                   <div class="status-dot"><i class="fas fa-circle"></i></div>
               </a>

               <a href="#">
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                         <span>Ola Biała</span>
                         <p>Test message</p>
                     </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>

            <a href="#">
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                         <span>Ola Biała</span>
                         <p>Test message</p>
                     </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>

            <a href="#">
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                         <span>Ola Biała</span>
                         <p>Test message</p>
                     </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>

            <a href="#">
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                         <span>Ola Biała</span>
                         <p>Test message</p>
                     </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>

            <a href="#">
                <div class="content">
                    <img src="./app/img/profile-pic.jpg" alt="">
                    <div class="details">
                         <span>Ola Biała</span>
                         <p>Test message</p>
                     </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>
           </div>
        </section>
    </main>

    <script src="./app/js/users.js"></script>
</body>
</html>