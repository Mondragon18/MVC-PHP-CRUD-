<?php

    class Paginas extends Controlador{

        public function __construct(){

            $this->usuarioModelo = $this->modelo('Usuario');
            // $this->articuloModelo = $this->modelo('Articulo');
            // echo 'controlador paginas cargadas';
        }

        public function index(){
            //obtener los usuarios
            //usuarioModelo trae la informacion de la carpeta modelos
            //metodos y parametros que exitan 
            $usuarios = $this->usuarioModelo->obtenerUsuarios();
            // $articulos = $this->articuloModelo->obtenerArticulos();

            //se crea una array para que obtenga la iformacion de la tabla usuario 
            $datos = [
                'usuarios' => $usuarios
                // 'articulos' => $articulos
            ];
            $this->vista('paginas/inicio', $datos);
        }

        public function agregar(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 $datos = [
                    'nombre' => trim($_POST['nombre']),
                    'email' => trim($_POST['email']),
                    'telefono' => trim($_POST['telefono'])
                ];

                if ($this->usuarioModelo->agregarUsuario($datos)) {
                    redireccionar('/paginas/user');
                }else{
                    die('Algo salio mal');
                }

            }else{
                $datos = [
                    'nombre' => '',
                    'email' => '',
                    'telefono' => ''
                ];
                $this->vista('paginas/agregar', $datos);

            }
            // $this->vista('paginas/articulo');
        }

         public function user(){
            $usuarios = $this->usuarioModelo->obtenerUsuarios();
            // $articulos = $this->articuloModelo->obtenerArticulos();
            $datos = [
                'usuarios' => $usuarios
                // 'articulos' => $articulos
            ];
            $this->vista('paginas/user', $datos);
        }

        //Editar el usuario existente 
        public function editar($id){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                   'id_usuario' => $id ,
                   'nombre' => trim($_POST['nombre']),
                   'email' => trim($_POST['email']),
                   'telefono' => trim($_POST['telefono'])
               ];

               if ($this->usuarioModelo->actualizarUsuario($datos)) {
                   redireccionar('/paginas/user');
               }else{
                   die('Algo salio mal');
               }

           }else{
                //obtener informacion de usuario desde el modelo
                $usuario = $this->usuarioModelo->obtenerUsuarioId($id);
               $datos = [
                   'id_usuario' => $usuario->id_usuario,
                   'nombre' => $usuario->nombre,
                   'email' => $usuario->email,
                   'telefono' => $usuario->telefono
               ];
               $this->vista('paginas/editar', $datos);

           }
        }

        public function borrar($id){
             //obtener informacion de usuario desde el modelo
             $usuario = $this->usuarioModelo->obtenerUsuarioId($id);
             $datos = [
                 'id_usuario' => $usuario->id_usuario,
                 'nombre' => $usuario->nombre,
                 'email' => $usuario->email,
                 'telefono' => $usuario->telefono
             ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                   'id_usuario' => $id
               ];

               if ($this->usuarioModelo->borrarUsuario($datos)) {
                   redireccionar('/paginas/user');
               }else{
                   die('Algo salio mal');
               }
           }
           $this->vista('paginas/borrar', $datos);

        }


    }

 ?>
