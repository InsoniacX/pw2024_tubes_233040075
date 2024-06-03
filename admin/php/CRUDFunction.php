<?php 

require 'connection.php';

// Memunculkan Data Content, User, dan Admin ke Tabel

function queryData($userData) {
    global $conn;
    $result = mysqli_query($conn, $userData);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}

// Melakukan Input Data Admin untuk Role Super Admin dan Data Content 

function inputAdminData($inputAdminData) {
    global $conn;

    $name = htmlspecialchars($inputAdminData['name']);
    $email = htmlspecialchars($inputAdminData['email']);
    $password = htmlspecialchars($inputAdminData['password']);
    $profile_pic = htmlspecialchars($inputAdminData['profile_pic']);

    if (!$profile_pic) {
        return false;
    }

    $query = "  INSERT INTO admin
                (name email, password, profile_pic)
                VALUES (
                '$name',
                '$email',
                '$password',
                '$profile_pic'); ";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

function inputAnimeData($inputUserData) {
    global $conn;

    $username = htmlspecialchars($inputUserData['username']);
    $email = htmlspecialchars($inputUserData['email']);
    $password = htmlspecialchars($inputUserData['password']);
    $profile_pic = htmlspecialchars($inputUserData['profile_pic']);

    if (!$profile_pic) {
        return false;
    }

    $query = "  INSERT INTO users
                (username, email, password, profile_pic)
                VALUES (
                '$username',
                '$email',
                '$password',
                '$profile_pic'); ";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}

// Melakukan Update Data pada Tabel Admin dan Content

function updateAdminData($updateAdminData) {
    global $conn;

    $name = htmlspecialchars($updateAdminData['name']);
    $email = htmlspecialchars($updateAdminData['email']);
    $password = htmlspecialchars($updateAdminData['password']);
    $profile_pic = htmlspecialchars($updateAdminData['profile_pic']);

    if (!$profile_pic) {
        return false;
    }

    $query = "  INSERT INTO admin
                (name email, password, profile_pic)
                VALUES (
                '$name',
                '$email',
                '$password',
                '$profile_pic'); ";

    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn));
}