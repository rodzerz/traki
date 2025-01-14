<?php require "components/header.php"?>

<?php require "components/navbar.php"?>

<h1>blog</H1>

<form >
<input name='search_query' value='<?=$_GET["search_query"] ?? "" ?> '/>
 <button>Meklēt</button>
 </form>

<?php 
  if (count($posts) == 0){ ?>
       <p> Nekas netika atrasts</p>
 <?php } ?>

<ul>
 <?php foreach ($posts as $posts){  ?>
     <li> <?=  $posts["content"] ?> </li>
 <?php } ?>
</ul>
<?php require "components/footer.php"?>





