<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?>

<h1><?= htmlspecialchars($post["content"]) ?> </h1>

<a href="edit?id=<?= $post["id"] ?>">Rediget</a><br>


<?php require "views/components/footer.php" ?>


<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <button type="submit" onclick="return confirm('Vai tiešām vēlaties dzēst šo ierakstu?');">Dzēst</button>
</form>