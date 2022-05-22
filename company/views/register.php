<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>

<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center">REGISTER</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control mb-2" required autofocus>

                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control mb-2" required>

                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-5" minlength="8" required>

                        <button type="submit" class="btn btn-success w-100">REGISTER</button>

                        <p class="text-center mt-3 small">Registered already? <a href="../views">Log in.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>