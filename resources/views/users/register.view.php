<?php require realpath(__DIR__ . "/../partials/header.view.php"); ?>

<div class="container">
    <h1>Register Yourself</h1>
    <?php if(isset($errors)) : ?>
        <div class="error">
            <li><?= $errors; ?></li>
        </div>
    <?php endif; ?>
    <div class="container">
        <form method="POST" action="register">
            <input type="text" name="fullname" id="fullname">
            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php require realpath(__DIR__ . "/../partials/footer.view.php"); ?>
