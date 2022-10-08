<?php
session_start();
if (!isset($_SESSION['user_login']) || $_SESSION['user_login']!=1){
   header("Location: login.php");
   die();
}