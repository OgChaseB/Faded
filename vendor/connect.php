<?php

    $connect = mysqli_connect('localhost', 'root', '', 'damir');

    if (!$connect) {
        die('Error connect to DataBase');
    }