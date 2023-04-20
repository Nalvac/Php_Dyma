<?php
    require_once('./add-todo.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once('includes/head.php')
    ?>
    <title>Todo</title>
    <script defer src="./public/js/index.js"></script>
</head>
<body>
    <div class="container">
        <?php 
            require_once('includes/header.php')
        ?> 
        <div class="content">
            <div class="todo-container">
                <h1>Ma Todo</h1>
                <form action="/" method="POST" class="todo-form">
                    <input type="text" name='todo' value="<?= $todo ?>" >
                    <button class="btn btn-primary">Ajouter</button>
                </form>
                <?php if($error):  ?>
                    <p class="text-danger"><?= $error ?></p>
                <?php endif; ?> 
                <ul class="todo-list">
                    <?php  foreach($todos as $t): ?>
                        <li class="todo-item <?= $t['done'] ? 'low-opacity' : '' ?>">
                            <span class="todo-name"><?= $t['name'] ?></span>
                            <a href="/edit-todo.php?id=<?= $t['id'] ?>&edit=true">
                                <button class="btn btn-primary btn-small "> <?= $t['done'] ? 'Annuler' : 'Valider' ?></button>
                            </a>
                            <a href="/edit-todo.php?id=<?= $t['id'] ?>&edit=false" >
                                <button class="btn btn-danger btn-small ">Supprimer</button>
                            </a>
                        </li>
                    <?php  endforeach; ?>
                </ul>
            </div>
        </div>
        <?php 
            require_once('includes/footer.php')
        ?>
    </div>
</body>
</html>