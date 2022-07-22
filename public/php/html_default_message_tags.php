<?php
    function show_message($msg, $type, $use_dismiss_button){
        switch ($type) {

            case 'success':

                $class = "alerta alerta-sucesso";

            break;

            case "error":

                $class =  "alerta alerta-falha";

            break;

            case "warning":

                $class =  "alerta alerta-aviso";

            break;

            case "timmed":
            
                //placeholder

            break;
        }
        if($use_dismiss_button){

            $html_structure = "<div class='$class'>$msg <span class='material-icons absolute' style='font-size: 20px;' onclick='this.parentElement.remove()'>highlight_off</span></div>";

        }else{

            $html_structure = "<div class='$class'>$msg </div>";

        }

        return $html_structure;
    }


?>