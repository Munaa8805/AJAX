<?php

//// connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

//// check for POST variable
echo 'Processing ...';
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "INSERT INTO users(name) values ('$name')";
    if (mysqli_query($conn, $query)) {
        echo "User added..";
    } else {
        echo "ERROR:" . mysqli_error($conn);
    }
}



echo 'Processing ...';
//// check for GET variable
if (isset($_GET['name'])) {
    echo 'GET: Your name is ' . $_GET['name'];
}