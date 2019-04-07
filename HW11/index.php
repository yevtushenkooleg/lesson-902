
    <p>Ваша страна проживания</p>

<form method="post">
    <input type="text" name="country" />
    <input type="submit" />
</form>

    <?php
    session_start();
    $_SESSION["country"]=$country;

    ?>