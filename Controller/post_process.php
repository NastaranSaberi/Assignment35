<?php
  
    session_start();   

    include "Model/database.php";

    $caption = $_POST["caption"];
    $media = $_POST["media"];
    $user_id = $_SESSION["user_id"];
   

    $db->query("INSERT INTO posts(caption,media,user_id) VALUES('$caption','$media','$user_id')");
   


    header("Location: home");


?>