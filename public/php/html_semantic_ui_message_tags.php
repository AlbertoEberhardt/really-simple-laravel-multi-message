<?php

function show_message($msg, $type, $use_dismiss_button){
    switch ($type) {

        case 'success':

            $class = "ui success message";

        break;

        case "error":

            $class =  "ui error message";

        break;

        case "warning":

            $class =  "ui warning message";

        break;

        case "timmed":

            //placeholder;
            
        break;
    }
    if($use_dismiss_button){

        $html_structure = "<div class='$class'> <i class='close icon'></i> <div class='header' style='text-align: center'> $msg </div> </div>";

    }else{

        $html_structure = "<div class='$class'> <div class='header' style='text-align: center'> $msg </div> </div>";        

    }
    return $html_structure;
}

?>