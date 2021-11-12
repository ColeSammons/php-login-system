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
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post" style="width: 50%">
            <input class="form-control"  type="text" name="name" placeholder="Full name...">
            <input class="form-control" type="text" name="email" placeholder="Email...">
            <input class="form-control" type="text" name="uid" placeholder="Username...">
            <input class="form-control" type="password" name="pwd" placeholder="Password...">
            <input class="form-control" type="text" name="pwdrepeat" placeholder="Repeat Password...">
            <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
        </form>
    </section>


</body>
</html>