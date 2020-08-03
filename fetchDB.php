<?php

$connection = mysqli_connect('localhost','root','','postajax');
$query = 'SELECT * FROM users';

$output = mysqli_query($connection,$query);


$users = mysqli_fetch_all($output, MYSQLI_ASSOC);
echo json_encode($users);
