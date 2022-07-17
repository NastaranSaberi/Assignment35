<?php

session_start();

$request = $_SERVER["REQUEST_URI"];
// $request = str_replace("/SocialNetwork", "", $request);


switch ($request)
{
    case ("/SocialNetwork/"):
    case ("/SocialNetwork/index"):
    case ("/SocialNetwork/index.php"):
    case("/SocialNetwork/View/index.php"):
    case ("/index.php"):
    case ("/index"):
    case ("index"):
        require "View/index.php";
        break;

    case ("/SocialNetwork/home.php/"):
    case ("/SocialNetwork/home.php"):
    case("/SocialNetwork/home"):
    case ("/home.php"):
    case ("/home"):

        if($_SESSION["login_status"] == true)
        {
            require "View/home.php";
            break;
        }
        else
        {
            require "View/index.php";
            break;        
         
        }
      

    case ("/SocialNetwork/profile.php/"):
    case ("/SocialNetwork/profile.php"):
    case("/SocialNetwork/profile"):
    case ("/profile.php"):
    case ("/profile"):
        require "View/profile.php";
        break;

    case ("/SocialNetwork/register.php/"):
    case ("/SocialNetwork/register.php"):
    case("/SocialNetwork/register"):
    case ("/register.php"):
    case ("/register"):
        require "View/register.php";
        break;

    case ("/SocialNetwork/register_process.php/"):
    case ("/SocialNetwork/register_process.php"):
    case("/SocialNetwork/register_process"):
    case ("/register_process.php"):
    case ("/register_process"):
        require "Controller/register_process.php";
        break;

    case ("/SocialNetwork/login_process.php/"):
    case ("/SocialNetwork/login_process.php"):
    case("/SocialNetwork/login_process"):
    case ("/login_process.php"):
    case ("/login_process"):
        require "Controller/login_process.php";
        break;

    case ("/SocialNetwork/post_process.php/"):
    case ("/SocialNetwork/post_process.php"):
    case("/SocialNetwork/post_process"):
    case ("/post_process.php"):
    case ("/post_process"):
        require "Controller/post_process.php";
        break;

    case ("/SocialNetwork/logout_process.php/"):
    case ("/SocialNetwork/logout_process.php"):
    case("/SocialNetwork/logout_process.php"):
    case ("/logout_process.php"):
    case ("/logout_process"):
        require "Controller/logout_process.php";
        break;

        
    default:
        require "View/404.php";
        break;
}

?>