<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1><?= htmlspecialchars($post["namee"]) ?> </h1>

<a href="edit?id=<?= $post["id"] ?>">Rediget</a><br>


<?php require "views/components/footer.php" ?>


<form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?=htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form>