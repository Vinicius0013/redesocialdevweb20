<?php
    namespace DankiCode\Controllers;

    class RegistrarController
    {
        public function index()
        {
            // Renderiza a página de registro.
            \DankiCode\Views\MainView::render('registrar');
        }
    }
?>