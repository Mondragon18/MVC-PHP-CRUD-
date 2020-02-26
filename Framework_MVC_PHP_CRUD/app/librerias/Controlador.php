<?php

    //clase controlador principal
    //Se encarga de poder cargar los modelos y las vistas
    class Controlador{
        //cargar modelo
        public function modelo($modelo){
            //carga modelo
            require_once '../app/modelos/' .$modelo . '.php';
            //instanciar el modelo
            return new $modelo();
        }

        //cargar vista
        public function vista($vista, $datos=[]){
            //chequear si el archivo vista existe
            if (file_exists('../app/vistas/' .$vista . '.php')) {
                require_once '../app/vistas/' .$vista . '.php';
            } else {
                //
                die('la vista no existe');
            }

            // require_once '../modelo/' .$modelo . '.php';
            //instanciar el modelo
            // return new $modelo();
        }
    }


 ?>
