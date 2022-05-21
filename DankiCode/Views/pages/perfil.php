<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">
</head>
<body>
    <section class="main-feed">
        <?php include('includes/sidebar.php'); ?><!--menu-->

        <div class="feed">
            <div class="editar-perfil">
                <h2>Editando Perfil:</h2><br>
                <?php
                    if (!isset($_SESSION['img']) || $_SESSION['img'] == '') {
                        echo '<img style="max-width:400px;width:100%;" src="' . INCLUDE_PATH_STATIC . 'images/avatar.jpg" />';
                    } else {
                        echo '<img style="max-width:400px;width:100%;" src="' . INCLUDE_PATH . './uploads/'. $_SESSION['img'] .'" />';
                    }
                ?>
                <br>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>">
                    <input type="password" name="senha" placeholder="Sua nova senha...">
                    <input type="file" name="file">
                    <input type="hidden" name="atualizar" value="atualizar">
                    <input type="submit" name="acao" value="Salvar!">
                </form>
            </div>
        </div><!--feed-->
    </section><!--main-feed-->
</body>
</html>