<?php
    while($row = mysqli_fetch_assoc($sql)) {
        $output .= '<a href="chat.php?user_id='.$row['user_id'].'">
                        <div class="content">
                            <img src="app/php/images/'.$row['img'].'" alt="">
                            <div class="details">
                                <span>'. $row['firstName']." ".$row['lastName'] .'</span>
                                <p>Test message</p>
                            </div>
                        </div>
                        <div class="status-dot"><i class="fas fa-circle"></i></div>
                    </a>';
    }
?>