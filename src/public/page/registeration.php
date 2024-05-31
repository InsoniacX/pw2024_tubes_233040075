<?php

require '../../functions/registerFunction.php';

if ( isset( $_POST["register"] ) ){
    
    if ( register( $_POST ) > 0 ){
        echo "
                <script>
                    alert('Akun anda sudah dibuat');
                </script>
            ";
    } else {
        echo mysqli_error($conn);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container w-50 py-5 px-2 d-flex justify-content-center align-items-center" style="background-color: rgba(255, 255, 255, 0.2); height: 70vh; border-radius: 20px;">
            <form action="" method="post" class="w-50">
                <div class="d-flex justify-content-center mb-5">
                    <h1 class="mb-3">Registeration</h1>
                </div>
                <label for="username" class="fw-bold fs-5">Username :</label>
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                </div>
                <label for="email" class="fw-bold fs-5">Email :</label>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="username" required>
                </div>
                <label for="password" class="fw-bold fs-5">Password :</label>
                <div class="mb-3 d-flex justify-content-end">
                    <input type="password" name="password" placeholder="Password" class="form-control" id="username" required>

                    <button class="showPassword position-absolute rounded" onclick="showPassword();" name="showPassword" style="width: 40px; height: 40px;"><i class="fa-regular fa-eye"></i></button>
                </div>
                <label for="confirm_password" class="fw-bold fs-5">Confirm Password :</label>
                <div class="mb-5 d-flex justify-content-end">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" id="username" required>

                    <button class="showPassword position-absolute rounded" onclick="showPassword();" name="showPassword" style="width: 40px; height: 40px;"><i class="fa-regular fa-eye"></i></button>
                </div>
                <div class="button d-flex justify-content-center">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>