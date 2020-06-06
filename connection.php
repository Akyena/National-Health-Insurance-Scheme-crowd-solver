<?php
    //Create connection
    $conn = mysqli_connect('localhost','id12667494_nhis','password','id12667494_nhis');

    //Try to connect to server
    if(mysqli_connect_errno()){
        echo "Couldn't connect to server ".mysqli_connect_errno();
    }
