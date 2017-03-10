<?php require realpath(__DIR__ . "/../partials/header.view.php"); ?>

<div class="container">
    <h1>Login</h1>
    <?php if(isset($errors)) : ?>
        <div class="error">
            <li><?= $errors; ?></li>
        </div>
    <?php endif; ?>
    <div class="container">
        <form method="POST" action="login">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password">
            <input type="submit" value="Login">
        </form>
    </div>
</div>

<?php require realpath(__DIR__ . "/../partials/footer.view.php"); ?>

