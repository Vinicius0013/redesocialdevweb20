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
            <div class="feed-wraper">
                <div class="feed-form">
                    <form method="post">
                        <textarea name="post_content" placeholder="No que você está pensando?" required="true"></textarea>
                        <input type="hidden" name="post_feed">
                        <input type="submit" name="acao" value="Postar!">
                    </form>
                </div><!--feed-form-->
                <?php
                    $retrievePosts = \DankiCode\Model\HomeModel::retrieveFriendsPosts();

                    foreach($retrievePosts as $key => $value) {
                ?>
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <?php if (!isset($value['me']) && $value['img'] == '') { ?>
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                            <?php } else if (!isset($value['me'])) { ?>
                                <img src="<?php echo INCLUDE_PATH;?>uploads/<?php echo $value['img']; ?>" alt="avatar">
                            <?php } ?>

                            <?php if (isset($value['me']) && $_SESSION['img'] == '') { ?>
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                            <?php } else if (isset($value['me'])) { ?>
                                <img src="<?php echo INCLUDE_PATH;?>uploads/<?php echo $_SESSION['img']; ?>" alt="avatar">
                            <?php } ?>
                        </div>
                        <div class="feed-single-post-author-info">
                            <?php if (isset($value['me'])) { ?>
                                <h3><?php echo $_SESSION['nome']; ?> (eu)</h3>
                            <?php } else {?>
                                <h3><?php echo $value['usuario']; ?></h3>
                            <?php }?>
                            <p><?php echo date('d/m/Y H:i:s', strtotime($value['data'])); ?></p>
                        </div><!--feed-single-post-author-info-->
                    </div><!--feed-single-post-author-->
                    <div class="feed-single-post-content">
                        <?php echo $value['conteudo']; ?>
                    </div><!--feed-single-post-content-->
                </div><!--feed-single-post-->
                <?php } ?>
            </div>
            

            <div class="friends-request-feed">
                <h4>Solicitações de amizade</h4>

                <?php
                    $listaAmizadesPendentes = \DankiCode\Model\UsuariosModel::listarAmizadesPendentes();

                    foreach ($listaAmizadesPendentes as $key => $value) {
                        $usuarioInfo = \DankiCode\Model\UsuariosModel::getUsuarioById($value['enviou']);
                ?>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                    <div class="friend-request-single-info">
                        <h3><?php echo $usuarioInfo['nome']; ?></h3>
                        <p><a href="<?php echo INCLUDE_PATH; ?>?aceitarAmizade=<?php echo $usuarioInfo['id']; ?>">Aceitar</a> | <a href="<?php echo INCLUDE_PATH; ?>?recusarAmizade=<?php echo $usuarioInfo['id']; ?>">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
                <?php }?>

            </div><!--friends-request-feed-->
        </div><!--feed-->
    </section><!--main-feed-->
</body>
</html>