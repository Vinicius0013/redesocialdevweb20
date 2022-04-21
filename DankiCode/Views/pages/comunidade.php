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
                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="imagem amigo" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                            </div>
                        </div><!--container-comunidade-single-->

                    </div><!--container-comunidade-wraper-->
                </div><!--container-comunidade-->
                <br>

                <div class="container-comunidade">
                    <h4>Comunidade</h4>
                    <div class="container-comunidade-wraper">
                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                        <div class="container-comunidade-single">
                            <div class="img-comunidade-user-single">
                                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/avatar.jpg" alt="imagem comunidade" />
                            </div><!--img-comunidade-user-single-->
                            <div class="info-comunidade-user-single">
                                <h2>Vinicius</h2>
                                <p>adicionarseuemailaqui@gmail.com</p>
                                <div class="btn-solicitar-amizade">
                                    <a href="<?php echo INCLUDE_PATH;?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
                                </div><!--btn-solicitar-amizade-->
                            </div><!--info-comunidade-user-single-->
                        </div><!--container-comunidade-single-->

                    </div><!--container-comunidade-wraper-->
                </div><!--container-comunidade-->
            </div><!--comunidade-->
        </div><!--feed-->
    </section><!--main-feed-->
</body>
</html>