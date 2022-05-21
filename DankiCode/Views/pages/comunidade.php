<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/comunidade.css" rel="stylesheet">
</head>
<body>
    <section class="main-feed">
        <?php include('includes/sidebar.php'); ?><!--menu-->

        <div class="feed">
            <div class="comunidade">
                <div class="container-comunidade">
                    <h4>Amigos</h4>
                    
                    <div class="container-comunidade-wraper">
                        <?php foreach(\DankiCode\Model\UsuariosModel::listarAmigos() as $key => $value) { ?>
                            <div class="container-comunidade-single">
                                <div class="img-comunidade-user-single">
                                    <?php
                                        if ($value['img'] == '') {
                                    ?>
                                        <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                                    <?php
                                        } else {
                                    ?>
                                        <img src="<?php echo INCLUDE_PATH;?>uploads/<?php echo $value['img'];?>" alt="imagem amigo" />
                                    <?php
                                        }
                                    ?>
                                </div><!--img-comunidade-user-single-->
                                <div class="info-comunidade-user-single">
                                    <h2><?php echo $value['nome']; ?></h2>
                                    <p><?php echo $value['email']; ?></p>
                                </div>
                            </div><!--container-comunidade-single-->
                        <?php } ?>

                    </div><!--container-comunidade-wraper-->
                </div><!--container-comunidade-->
                <br>

                <div class="container-comunidade">
                    <h4>Comunidade</h4>
                    <div class="container-comunidade-wraper">
                        <?php
                            $comunidades = \DankiCode\Model\UsuariosModel::listarComunidade();
                            foreach($comunidades as $key => $value) {
                                
                                if (\DankiCode\Model\UsuariosModel::verificarAmizadaComUsuario($value['id'])) {
                                    //Já são amigos, não existe necessidade de listar.
                                    continue;
                                }

                                if ($value['id'] == $_SESSION['id']) :
                                    continue;
                                endif;
                        ?>
                            <div class="container-comunidade-single">
                                <div class="img-comunidade-user-single">
                                    <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                                </div><!--img-comunidade-user-single-->
                                <div class="info-comunidade-user-single">
                                    <h2><?php echo $value['nome']; ?></h2>
                                    <p><?php echo $value['email']; ?></p>
                                    <div class="btn-solicitar-amizade">
                                        <?php if (\DankiCode\Model\UsuariosModel::existePedidoAmizade($value['id'])) :?>
                                            <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=<?php echo $value['id']; ?>">Solicitar Amizade</a>
                                        <?php else : ?>
                                            <a href="javascript:void(0)" style="border:0;color:orange;">Pedido Pendente</a>
                                        <?php endif; ?>
                                    </div><!--btn-solicitar-amizade-->
                                </div><!--info-comunidade-user-single-->
                            </div><!--container-comunidade-single-->
                        <?php
                            }
                        ?>

                    </div><!--container-comunidade-wraper-->
                </div><!--container-comunidade-->
            </div><!--comunidade-->
        </div><!--feed-->
    </section><!--main-feed-->
</body>
</html>