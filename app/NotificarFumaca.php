<?php

    namespace App;

    class NotificarFumaca implements NotificacaoInterface{

        public function notificar(){
            echo "Notificando fumaça!";
        }

    }

?>