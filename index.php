<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .wrap{
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>
        
        <form action="_actions/login.php" class="" method="post">
            <input type="email" name="email" placeholder="Email" requird class="form-control mb-2">
            <input type="password" name="password" placeholder="Password" requird class="form-control mb-2">
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>      
        <br>
        <a href="register.php">Register</a>
        
    </div>    
</body>
</html>