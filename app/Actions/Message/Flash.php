<?php

    namespace App\Actions\Message;

    class Flash{

        public static function success($msg){

            session() -> push("messages", ["success" => $msg]);
        }

        public static function error($msg){

            session() -> push("messages", ["error" => $msg]);
        }

        public static function timed_msg($msg){
            
            //For now is a placeholder

        }

        public static function warning($msg){

            session() -> push("messages", ["warning" => $msg]);
        }
    }



?>