<?php
    function show_message($msg, $type, $use_dismiss_button){
        switch ($type) {

            case 'success':

                $class = "alert alert-success text-center";

            break;

            case "error":

                $class =  "alert alert-danger text-center";

            break;

            case "warning":

                $class =  "alert alert-warning text-center";

            break;

            case "timmed":

                //placeholder
                
            break;
        }

        if($use_dismiss_button){

            $html_structure = "<div class='$class alert-dismissible fade show' role='alert'> $msg <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";

        }else{

            $html_structure = "<div class='$class' role='alert'>$msg</div>";

        }

        return $html_structure;
    }

?>