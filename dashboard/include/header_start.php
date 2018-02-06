<?php
	
	session_start();
	require_once "include/functions.php";
	require_once "../include/functions.php";
	
	  if (check_is_user($_SESSION["user-id"]) == false ){

    header("Location:../index.html");
    die();

  }

   if (check_user_log() == false ){

    header("Location:../index.html");
    die();

  }

?>

<!DOCTYPE html>
<html>
<head>