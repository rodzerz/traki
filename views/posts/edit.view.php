
<?php require "views/components/navbar.php" ?>
<?php require "views/components/header.php" ?><br>

<h1>Rediget: <?= htmlspecialchars($post["content"] ?? "") ?> </h1>

<form method = "POST">
<input type="hidden" name="id" value="<?= $post["id"] ?? '' ?>">

<p>Saturs: <input name="content" value = "<?=$post["content"] ?? "" ?>">
<button>Rediget</button>
</p>
</form>

<?php if (isset($errors['content'])): ?>
            <div class="error"><?php echo $errors['content']; ?></div>
        <?php endif; ?>

<?php require "views/components/footer.php" ?>



