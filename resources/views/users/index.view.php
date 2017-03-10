<?php require realpath(__DIR__ . "/../partials/header.view.php"); ?>
<div class="container">
    <h1>User Lists</h1>
    <div class="container">
        <ul class="userList">
            <?php foreach ($users as $user): ?>
                <li>
                    <?= $user->user_full_name; ?>
                    <span class="pull-right">
                        <a class="delete" href="/users/delete?id=<?= $user->user_id ?>">X</a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $('.delete').on('click', function (event) {
        if (confirm("Are you sure you want to delete this user"))
            return true;

        event.preventDefault();

        return false;
    });
</script>
<?php require realpath(__DIR__ . "/../partials/footer.view.php"); ?>
