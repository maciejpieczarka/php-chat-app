<?php
    while($row = mysqli_fetch_assoc($sql)) {
        //! Select all messages sent between these two users
        $sql2 = mysqli_query($conn, "SELECT * FROM messages 
                                    WHERE (incoming_msg_id = {$row['unique_id']} 
                                    OR outgoing_msg_id = {$row['unique_id']})
                                    AND (outgoing_msg_id = {$outgoing_id} 
                                    OR incoming_msg_id = {$outgoing_id})
                                    ORDER BY msg_id DESC LIMIT 1");
        $row2 = mysqli_fetch_assoc($sql2);
        if(mysqli_num_rows($sql2) > 0) {
            $result = $row2['msg'];
        }else {
            $result = "No message available";
        }

        //! Trimming last message sent
        if(strlen($result) > 28) {
            $msg = substr($result, 0, 28).'...';
        } else {
            $msg = $result;
        }

        //! Add 'you:' text before message if sent by current user
        if($outgoing_id == @$row2['outgoing_msg_id'] ) {
            $you = "You: ";
        } else {
            $you = "";
        }

        //! Check if user is online or not
        if($row['status'] == "Offline now") {
            $status = "Offline";
        } else {
            $status = "";
        }

        $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                            <img src="app/php/images/'.$row['img'].'" alt="">
                            <div class="details">
                                <span>'. $row['firstName']." ".$row['lastName'] .'</span>
                                <p>'.$you.$msg.'</p>
                            </div>
                        </div>
                        <div class="status-dot '.$status.'"><i class="fas fa-circle"></i></div>
                    </a>';
    }
?>