<?php

require_once 'models/usuarios.php';
class usuariosController{
    public function index(){
        echo "Controlador usuarios, acción Index";
    }

    public function registro(){
        require_once 'views/usuarios/registro.php';
    }
    public function login(){
        require_once 'views/usuarios/login.php';
    }

    public function panel(){
        require_once 'views/usuarios/panel.php';
    }
    public function save(){
        if (isset($_POST)){
            $tipo_documento = isset($_POST['tipo_documento']) ? $_POST['tipo_documento']:false;
            $num_documento = isset($_POST['num_documento']) ? $_POST['num_documento']:false;
            $nombre = isset($_POST['nombres']) ? $_POST['nombres']:false;
            $primer_apellido = isset($_POST['primer_apellido']) ? $_POST['primer_apellido']:false;
            $segundo_apellido = isset($_POST['segundo_apellido']) ? $_POST['segundo_apellido']:false;
            $email = isset($_POST['email']) ? $_POST['email']:false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono']:false;
            $clave = isset($_POST['clave']) ? $_POST['clave']:false;
            $clave_confirmada = isset($_POST['clave_confirmada']) ? $_POST['clave_confirmada']:false;

            $usuario = isset($_POST['usuario']) ? $_POST['usuario']:false;


            if ($usuario && $clave){
                $usuario_obj = new Usuarios();
                //$usuario->setIdPersona($_POST['id_persona']);
                //$usuario->setIdPerfil($_POST['id_perfil']);
                $usuario_obj->setUsuario($usuario);
                $usuario_obj->setClave($clave);
                //$usuario->setUrlImagen($_POST['url_imagen']);
                //$usuario->setEstado($_POST['estado']);
                //$usuario->setIdUsuarioCreacion($_POST['id_usuario_creacion']);
                $save = $usuario_obj->save();

                if ($save){
                    $_SESSION['register'] = 'complete';
                }else{
                    $_SESSION['register'] = 'failed';
                }
            }else{
                $_SESSION['register'] = 'failed';
            }
            //var_dump($usuario);

        }else{
            $_SESSION['register'] = 'failed';
        }
        //header("Location:".base_url.'usuarios/registro');
        echo '<script>window.location="'.base_url.'usuarios/registro"</script>';
    }

    public function logueo(){
        if (isset($_POST)){
            //identificar al usuario
            //Consulta a la db
            $usuarioObj = new Usuarios();
            $usuarioObj->setUsuario($_POST['usuario']);
            $usuarioObj->setClave($_POST['clave']);

            echo '<pre>';
            //var_dump($usuarioObj);
            echo '</pre>';

            $identity = $usuarioObj->login();
            if ($identity&&is_object($identity)){
                $_SESSION['identity'] = $identity;
                if($identity->id_perfil=='1'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = 'Identificación fallida';
            }
            //Crear una sesión

        }
        /*echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';*/
        //echo '<script>window.location="'.base_url.'"</script>';
        echo '<script>window.location="'.base_url.'usuarios/panel"</script>';
        //header("Location:".base_url);
    }

    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
       if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        echo '<script>window.location="'.base_url.'"</script>';
    }//fin clase

}