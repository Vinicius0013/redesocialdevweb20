<?php
    namespace DankiCode\Model;

    class HomeModel
    {
        public static function postFeed($post)
        {
            $pdo = \DankiCode\MySql::connect();
            $post = strip_tags($post);
            
            // Verificar se existe no conteúdo da publicação '[imagem'
            if (preg_match('/\[imagem/', $post)) {
                // Substituir texto de imagem pela tag
                $post = preg_replace('/(.*?)\[imagem=(.*?)\]/', '<p>$1</p><img src="$2"/>', $post);
            } else {
                $post = '<p>' . $post . '</p>';
            }

            $postFeed = $pdo->prepare("INSERT INTO `posts` VALUES (null,?,?,?)");
            $postFeed->execute(array($_SESSION['id'],$post,date('Y-m-d H:i:s',time())));

            $atualizaUsuario = $pdo->prepare("UPDATE usuarios SET ultimo_post = ? WHERE id = ?");
            $atualizaUsuario->execute(array(date('Y-m-d H:i:s',time()),$_SESSION['id']));
        }
    }
?>