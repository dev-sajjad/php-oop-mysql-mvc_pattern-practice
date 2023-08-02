<?php
// connect to database
$conn = mysqli_connect('localhost', 'sajjad', 'test123', 'pizza_mania');

//check connection
if (!$conn) {  
    die("Connection error: " . mysqli_connect_error());
}