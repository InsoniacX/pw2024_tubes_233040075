<?php
    require '../php/CRUDFunction.php';

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $queryData = queryData("SELECT * FROM admin");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="content">
            <form class="table table-bordered" action="" method="post">
                <div class="search-bar"></div>
            </form>
            <table class="table table-dark table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Profile Picture</th>
                    <th>Alter</th>
                </tr>
                <?php $i = 100;?>
                <?php foreach ($queryData as $data) :?>
                <tr>
                    <td><?= $i++;?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['profile_pic']; ?></td>
                    <td><a href="#">Ubah Data</a> | <a href="#">Hapus Data</a></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


