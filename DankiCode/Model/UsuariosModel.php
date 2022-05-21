<?php
    namespace DankiCode\Model;

    class UsuariosModel
    {
        public static function emailExists($email)
        {
            $pdo = \DankiCode\MySql::connect();
            $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificar->execute(array($email));

            // Retorna se existe o e-mail na base de dados
            return $verificar->rowCount() == 1;
        }

        public static function listarComunidade()
        {
            $pdo = \DankiCode\MySql::connect();
            $comunidade = $pdo->prepare("SELECT * FROM usuarios");
            $comunidade->execute();
            return $comunidade->fetchAll();
        }

        public static function solicitarAmizade($idPara)
        {
            $pdo = \DankiCode\MySql::connect();
            $verificarAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
            $verificarAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));

            if ($verificarAmizade->rowCount() == 1) {
                return false;
            } else {
                // Podemos inserir no banco a solicitação
                $insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES (null,?,?,0)");
                return $insertAmizade->execute(array($_SESSION['id'],$idPara)) ? true : false;
            }
            return true;
        }

        public static function listarAmizadesPendentes()
        {
            $pdo = \DankiCode\MySql::connect();
            $listarAmizadesPendentes = $pdo->prepare("SELECT * FROM amizades WHERE recebeu = ? AND status = 0");
            $listarAmizadesPendentes->execute(array($_SESSION['id']));
            return $listarAmizadesPendentes->fetchAll();
        }

        public static function getUsuarioById($id)
        {
            $pdo = \DankiCode\MySql::connect();
            $usuario = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
            $usuario->execute(array($id));
            return $usuario->fetch();
        }

        public static function existePedidoAmizade($idPara)
        {
            $pdo = \DankiCode\MySql::connect();
            $verificarAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
            $verificarAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));

            return ($verificarAmizade->rowCount() == 1) ? false : true;
        }

        public static function atualizarPedidoAmizade($enviou,$status)
        {
            $pdo = \DankiCode\MySql::connect();
            if ($status == 0) {
                //Recusei o pedido.
                $del = $pdo->prepare("DELETE FROM amizades WHERE enviou = ? AND recebeu = ? AND status = 0");
                $del->execute(array($enviou,$_SESSION['id']));
            } else if ($status == 1) {
                //Aceitou o pedido.
                $aceitarPedido = $pdo->prepare("UPDATE amizades SET status = 1 WHERE enviou = ? AND recebeu = ?");
                $aceitarPedido->execute(array($enviou,$_SESSION['id']));

                return ($aceitarPedido->rowCount() == 1) ?? false;
            }
        }

        public static function verificarAmizadaComUsuario($idPara)
        {
            $pdo = \DankiCode\MySql::connect();
            $verificarAmizades = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ? AND status = 1) OR (enviou = ? AND recebeu = ? AND status = 1)");
            $verificarAmizades->execute(array($idPara,$_SESSION['id'],$_SESSION['id'],$idPara));
            return ($verificarAmizades->rowCount() == 1) ?? false;
        }

        public static function listarAmigos()
        {
            $pdo = \DankiCode\Mysql::connect();
            $amizades = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND status = 1) OR (recebeu = ? AND status = 1)");
            $amizades->execute(array($_SESSION['id'],$_SESSION['id']));
            $amizades = $amizades->fetchAll();

            $amigosConfirmados = array();
            foreach($amizades as $key => $value) {
                if ($value['enviou'] == $_SESSION['id']) {
                    $amigosConfirmados[] = $value['recebeu'];
                } else {
                    $amigosConfirmados[] = $value['enviou'];
                }
            }

            $listaAmigos = array();
            foreach($amigosConfirmados as $key => $value) {
                $friend = self::getUsuarioById($value);
                $listaAmigos[$key]['nome'] = $friend['nome'];
                $listaAmigos[$key]['email'] = $friend['email'];
                $listaAmigos[$key]['img'] = $friend['img'];
            }

            return $listaAmigos;
        }
    }
?>