<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<body>
    <?php
        include_once "header.php";
    ?>

    <section class="signup-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post" style="width: 50%">
            <input class="form-control" type="text" name="name" placeholder="Username/Email...">
            <input class="form-control" type="password" name="pwd" placeholder="Password...">
            <button class="btn btn-primary" type="submit" name="submit">Log In</button>
        </form>
    </section>
</body>
</html>