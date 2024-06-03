<?php 

require '../php/CRUDFunction.php';

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$queryData = queryData("SELECT * FROM anime");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <h1>Anime Data</h1>
    <div class="container-fluid d-flex justify-content-center">
        <div class="container">
            <form action="" method="post">
                <div class="search-bar"></div>
            </form>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Studio</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Preview Image</th>
                    <th>Thumbnail</th>
                    <th>Release Data</th>
                </tr>
                <?php foreach ($queryData as $data) :?>
                <tr>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['judul']; ?></td>
                    <td><?= $data['studio']; ?></td>
                    <td><?= $data['genre']; ?></td>
                    <td><?= $data['duration']; ?></td>
                    <td><?= $data['preview_img']; ?></td>
                    <td><?= $data['thumbnail']; ?></td>
                    <td><?= $data['release_date']; ?></td>
                </tr>
                <?php endforeach;?>
            </table>
            <a href="inputData.php">Tambah Data</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>