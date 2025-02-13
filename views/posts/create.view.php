<?php require "views/components/navbar.php" ?>

<link rel="stylesheet" href="css/style.css">

<h1>Izveidot jaunu augli</h1>


<form method="POST">
    <div>
        <label for="namee">Augļa nosaukums:</label>
        <input type="text" name="namee" id="namee" value="<?= htmlspecialchars($_POST['namee'] ?? '') ?>" />
        
        
        <?php if (isset($errors['namee'])): ?>
            <p class="error"><?= $errors['namee'] ?></p>
        <?php endif; ?>
    </div>
    
    <button>Pievienot </button>
</form>

