<?php

    session_start();
    
    include "Model/database.php";

    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $username= $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];

   



 
    if($password == $confirm_password)
    {
        if(strlen($username) >= 3)
        {
            $users_count = $db->query("SELECT * FROM users WHERE username = '$username' ") ->num_rows;
            if($users_count == 0) 
            {
          
                $secure_password = md5($password);
            
                $db->query("INSERT INTO users(first_name,last_name,username,email,password,confirm_password,birthday,gender) VALUES('$first_name','$last_name','$username','$email','$secure_password','$confirm_password','$birthday','$gender')");
                header ("Location: index.php");
                $_SESSION["message"] = "our registration was successful.β";
                $_SESSION["message_type"] = "success";
            
                
            }
            else
            {
                $_SESSION["message"] = "Your username is duplicated. π";
                header ("Location: register");
            }
        }
        else
        {
            $_SESSION["message"] = "Username must be at least 3 characters long. π";
            $_SESSION["message_type"] = "error";
            header ("Location: register");
        }
    }
    else
    {
        $_SESSION["message"] = "Passwords dosent match.π";
        $_SESSION["message_type"] = "error";
        header ("Location: register");

    }

    if($first_name =='' || $last_name =='' || $email =='' || $password =='' || $confirm_password =='' || $birthday =='' || $gender =='')
    {
        $_SESSION["message"] = "Please complete the registration form.(βIt is mandatory to fill in all the information on the registration formβ)";
        $_SESSION["message_type"] = "error";
        header ("Location: register");
    
    }
    



   
?>

