<?php
require 'connection.php';
    
function queryAdminData($adminData) {
    global $conn;
    $result = mysqli_query($conn, $adminData);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}

function queryUserData($userData) {
    global $conn;
    $result = mysqli_query($conn, $userData);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}

function queryAnimeData($animeData) {
    global $conn;
    $result = mysqli_query($conn, $animeData);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}
