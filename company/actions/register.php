<?php
// include the class
include "../classes/user.php";

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$photo = "profile.jpg";

// Create an object
$user = new User;

// Call the method
$user->createUser($first_name, $last_name, $username, $password, $photo);