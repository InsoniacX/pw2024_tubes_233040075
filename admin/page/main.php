<?php
require '../function/queryFunction.php';

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$adminData = queryAdminData("SELECT * FROM admin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container my-4 py-3">
        <h1>Hello <!-- <?= $adminData['username']; ?> -->, Have a Nice Day 😊</h1>

    </div>




    <div class="container-fluid align-items-center">
        <div class="container d-flex justify-content-evenly">
            <div class="card" style=" padding: 40px 10px; border: 4px solid black; border-radius: 10px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                <div class="card-header d-flex justify-content-center">
                    <h1>Movie Data</h1>
                </div>
                <div class="icon d-flex justify-content-center">
                    <i class="bi bi-film" style="font-size: 80px;"></i>
                </div>
                <div class="button d-flex justify-content-center">
                    <a href="animeData.php" style="text-decoration: none; color: black; background-color: green; padding: 10px;">Input Data</a>
                </div>
            </div>
            <div class="card" style=" padding: 40px 10px; border: 4px solid black; border-radius: 10px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                <div class="card-header d-flex justify-content-center">
                    <h1>User Data</h1>
                </div>
                <div class="icon d-flex justify-content-center">
                    <i class="bi bi-people-fill" style="font-size: 80px;"></i>
                </div>
                <div class="button d-flex justify-content-center">
                    <a href="#" style="text-decoration: none; color: black; background-color: green; padding: 10px;">Check Data</a>
                </div>
            </div>
            <div class="card" style=" padding: 40px 10px; border: 4px solid black; border-radius: 10px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                <div class="card-header d-flex justify-content-center">
                    <h1>PDF Report</h1>
                </div>
                <div class="icon d-flex justify-content-center">
                    <i class="bi bi-file-pdf" style="font-size: 80px;"></i>
                </div>
                <div class="button d-flex justify-content-center">
                    <a href="#" style="text-decoration: none; color: black; background-color: green; padding: 10px;">Create PDF</a>
                </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>