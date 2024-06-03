<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container w-50 py-5 px-2 d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.4); height: max-content; border-radius: 20px;">
            <form action="" method="post" enctype="multipart/form-data" class="w-50">
                <div class="d-flex justify-content-center mb-3">
                    <h1 class="mb-3">Input Anime Data</h1>
                </div>
                <label for="judul" class="fw-bold fs-5">Judul :</label>
                <div class="mb-3">
                    <input type="text" name="judul" placeholder="Judul Anime" class="form-control" style="height: 50px;"  required>
                </div>
                <label for="deskripsi" class="fw-bold fs-5">Sinopsis :</label>
                <div class="mb-3">
                    <textarea rows="10" name="deskripsi" placeholder="Sinopsis" class="form-control" id="deskripsi" style="resize: none;" required></textarea>
                </div>
                <label for="studio" class="fw-bold fs-5">Studio :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="text" name="studio" placeholder="Studio" class="form-control" id="studio" style="height: 50px;"  required>
                </div>
                <label for="rating" class="fw-bold fs-5">Rating :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="text" name="rating" placeholder="Rating (9.9)" class="form-control" id="rating" style="height: 50px;" required>
                </div>
                <label for="genre" class="fw-bold fs-5">Genre :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="text" name="genre" placeholder="Genre" class="form-control" id="genre" style="height: 50px;" required>
                    <button type="add" name="tambahGenre" class="mx-2" id="addInput" style="width: 50px; font-size: 30px;">+</button>
                </div>
                <label for="duration" class="fw-bold fs-5">Durasi :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="text" name="duration" placeholder="Durasi(menit)" class="form-control" id="duration" style="height: 50px;" required>
                </div>
                <label for="rating" class="fw-bold fs-5">Preview :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="file" name="preview" class="form-control" id="rating" style="height: 42px;" required>
                </div>
                <label for="thumbnail" class="fw-bold fs-5">Thumbnail :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" style="height: 42px;" required>
                </div>
                <div class="button d-flex justify-content-center">
                    <button type="submit" name="register" class="btn btn-primary" style="width: 500px; height: 50px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

        let dataRow = 1;
        $('#addInput').click( () => {
            dataRow++
            inputRow(inputRow)
        })

        inputRow = (i) => {
            let tr = '<input type="text" name="genre" placeholder="Genre" class="form-control" id="genre" style="height: 50px;" required><button name="hapus" class="mx-2" id="addInput" style="width: 50px; font-size: 30px;">-</button>'
            $('#genre').append(tr)
        }

    </script>
</body>
</html>