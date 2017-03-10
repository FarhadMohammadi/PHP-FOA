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
          <div>
            <span>Enter You'r Full Name</span>
            <input type="text" name="user_full_name" id="user_full_name">
          </div>
          <div>
            <span>Enter You'r Email</span>
            <input type="text" name="user_email" id="user_email">
          </div>
            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php require realpath(__DIR__ . "/../partials/footer.view.php"); ?>
