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
    }
?>