<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    //$conn=mysqli_connect("localhost","root",'',"chat"); //$conn have defined in config.php

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        //check the email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//email valided
            //check the email is in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {//if email already exist
                echo "$email - This email is already exist!";
            }else{
                //let's check user upload file or not
                if (isset($_FILES['image'])) {// if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded img name
                    //$img_type = $_FILES['image']['type']; //getting user upload img type
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

                    //explode image and get the last extension like jpg png
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //here we get the extension of an user uploaded img file
                    $extensions = ['png', 'jpeg', 'jpg']; //these are some valid img exist and we've store them in array 
                    if (in_array($img_ext, $extensions) === true) { //if user upload img ext is matched with any array extensions
                        $time = time(); // this will return current time
                                        // need this time for uploading user img to in our folder we rename user file with current time 
                                        // so all the img file will have a unique name
                        
                        //now move the user upload img to our particular folder
                        $new_img_name = $time.$img_name;  //current time will be added before the name of user uploaded img. so if user upload two different images with the same name then the name of a particular image will be unique with adding time.
                        if (move_uploaded_file($tmp_name, "images/".$new_img_name)) { //if user upload img move to our folder successfully 
                            $status = "Active now"; /*once user signed up then his status will be active now*/
                            $random_id = rand(time(), 10000000); //creating random id for user 

                            //insert all the user data inside table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if ($sql2) { //if these data inserted
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if (mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in other php file
                                    echo "success";
                                }                             
                            }else {
                                echo "Something went wrong!";
                            }
                        }
                        
                                        
                    }else {
                        echo "Please select an Image file - jpeg, jpg, png!";
                    }

                }else{
                    echo "Please select an Image file!";
                }
            }
        }else {//email not valided
            echo "$email - This email is not valid email!";
        }
    }else {
        echo "All input are required!";
    }
?>