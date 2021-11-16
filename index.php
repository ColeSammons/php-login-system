<?php
    include_once "header.php";
?>

<h2>Homepage</h2>

<?php
    if(isset($_SESSION["useruid"])) {
    echo "<p>Hello " . $_SESSION["useruid"] . "</p>";
    }
?>

</body>
</html>