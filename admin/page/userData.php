<?php
    require '../function/queryfunction.php';

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $userData = queryUserData("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <h1>User Data</h1>
    <div class="container d-flex justify-content-center">
        <form action="" method="post">
            <div class="search-bar"></div>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
            <?php foreach ($userData as $data) :?>
            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['email']; ?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


