<?php

$conn = mysqli_connect('localhost', 'root', '', 'db');

function queryUserData($userData) {
    global $conn;
    $result = mysqli_query($conn, $userData);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}

function queryContentData($contentData) {

}