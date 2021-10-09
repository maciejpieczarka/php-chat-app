<?php
    session_start();
    include_once "configuration.php";
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0) {
                echo "$email - This email already exists!";
            } else {
                if(isset($_FILES['image'])) {
                    $imgName = $_FILES['image']['name'];
                    $tmpName = $_FILES['image']['tmp_name']; //! temporary image name

                    $imgExplode = explode('.', $imgName);
                    $imgExt = end($imgExplode); //! Get the image extension

                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($imgExt, $extensions) === true) {
                        $time = time();
                        $newImgName = $time.$imgName;
                        if(move_uploaded_file($tmpName, "images/".$newImgName)) {
                            $status = "Active now";
                            $randomId = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, firstName, lastName, email, password, img, status) VALUES ({$randomId}, '{$firstName}', '{$lastName}', '{$email}', '{$password}', '{$newImgName}', '{$status}')");

                            if($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";
                                }
                            } else {
                                echo "Something went wrong!";
                            }
                        }
                        
                    } else {
                        echo "Please select an Image file - png, jpg, jpeg!";
                    }
                } else {
                    echo "Please select an Image file!";
                }
            }
        } else {
            echo "$email - is not a valid E-mail address!";
        }
    } else {
        echo "All input fields are required!";
    }
?>