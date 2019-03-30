<?php

    namespace App;

    class NotificarEmail implements NotificacaoInterface{
        public function notificar(){
            echo "Notificando por email...";
        }
    }

?>