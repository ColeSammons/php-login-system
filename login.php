    <?php
        include_once "header.php";
    ?>

    <section class="signup-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post" style="width: 50%">
            <input class="form-control" type="text" name="uid" placeholder="Username/Email...">
            <input class="form-control" type="password" name="pwd" placeholder="Password...">
            <button class="btn btn-primary" type="submit" name="submit">Log In</button>
        </form>
        <?php
        if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login informatione!</p>";
            }
        }
    ?>
    </section>
</body>
</html>