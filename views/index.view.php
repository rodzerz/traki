<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>
<link rel="stylesheet" href="css/style.css">
<body class="a">
<h1>Fruits</h1>

<form method="GET">
  <input name="search_query" value="<?= htmlspecialchars($_GET["search_query"] ?? "") ?>" />
  <button>Meklēt</button>
</form>


<?php 
  if (count($posts) == 0) { ?>
    <p>Nekas netika atrasts</p>
<?php } ?>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["namee"]) ?></a> </li>
  <?php } ?>
</ul>

<?php require "components/footer.php" ?>

</body>
</html>