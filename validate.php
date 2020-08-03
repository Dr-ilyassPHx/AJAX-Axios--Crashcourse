<?php

echo 'preprocessing';
$connection = mysqli_connect('localhost','root','','postajax');

//
if(isset($_GET ['name'])){
    echo 'GET: your name is '. $_GET['name'];
}

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    echo 'POST: your sent name was '.$_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";
    if (mysqli_query($connection,$query)) {
        echo ' user added';

    }else{
        echo 'ERROR: '.mysqli_error($connection);
    }
}

// connect to database
