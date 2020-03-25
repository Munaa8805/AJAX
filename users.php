<?php

//// connect to a database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

$query = 'SELECT * FROM users';

//// GET result
$result = mysqli_query($conn, $query);

////Fatch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($users);