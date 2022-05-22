<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">
                        <button type="submit" class="btn btn-primary w-100">LOG IN</button>
                    </form>

                    <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>