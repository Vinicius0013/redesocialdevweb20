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
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/logodanki.svg" alt="logo">
            </div><!--logo-sidebar-->
            <br/>
            <div class="menu-sidebar">
                <h4>Menu</h4><br/>
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> feed</a>
                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> perfil</a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> amigos</a>

                <a href="?loggout">loggout</a>
            </div><!--menu-sidebar-->
        </div><!--sidebar-->

        <div class="feed">
            <div class="feed-wraper">
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Vinicius</h3>
                            <p>17:18 16/04/2022</p>
                        </div><!--feed-single-post-author-info-->
                    </div><!--feed-single-post-author-->
                    <div class="feed-single-post-content">
                        <p>Dia de reunião com a equipe e de lembar as coisas boas de 2020. Lembre-se: É importante nos matermos 
                        ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
                    </div><!--feed-single-post-content-->
                </div><!--feed-single-post-->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                        </div>
                        <div class="feed-single-post-author-info">
                            <h3>Vinicius</h3>
                            <p>17:18 16/04/2022</p>
                        </div><!--feed-single-post-author-info-->
                    </div><!--feed-single-post-author-->
                    <div class="feed-single-post-content">
                        <p>Dia de reunião com a equipe e de lembar as coisas boas de 2020. Lembre-se: É importante nos matermos 
                        ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
                        <img src="<?php echo INCLUDE_PATH_STATIC; ?>images/post-placeholder.png" alt="imagem post">
                    </div><!--feed-single-post-content-->
                </div><!--feed-single-post-->
                
            </div>
            

            <div class="friends-request-feed">
                <h4>Solicitações de amizade</h4>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                    <div class="friend-request-single-info">
                        <h3>Otávio da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                    <div class="friend-request-single-info">
                        <h3>Otávio da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC;?>images/avatar.jpg" alt="avatar">
                    <div class="friend-request-single-info">
                        <h3>Otávio da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
                    </div><!--friend-request-single-info-->
                </div><!--friend-request-single-->
            </div><!--friends-request-feed-->
        </div><!--feed-->
    </section><!--main-feed-->
</body>
</html>