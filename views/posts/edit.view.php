
<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<h1>Rediget: <?= htmlspecialchars($post["namee"] ?? "") ?> </h1>

<form method = "POST">
<input type="hidden" name="id" value="<?= $post["id"] ?? '' ?>">

<p>Saturs: <input name="namee" value = "<?=$post["namee"] ?? "" ?>">
<button>Rediget</button>
</p>
</form>

<?php if (isset($errors['namee'])): ?>
            <div class="error"><?php echo $errors['namee']; ?></div>
        <?php endif; ?>

<?php require "views/components/footer.php" ?>



