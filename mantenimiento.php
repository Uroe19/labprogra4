<?php
    session_start();
    require_once("conexion.php");

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "bd_comentarios";
    $conexion = new Conexion($servidor, $usuario, $clave, $base_datos);

    function obtenerComentario($conexion){
        $comentarios = "SELECT u.usuario, c.fecha, c.comentario FROM tbl_comentarios c JOIN tbl_usuarios u WHERE c.id_usuario = u.id ORDER BY c.id DESC";
        $conexion->consulta($comentarios);
        $datos = "";

        while($comentario = $conexion->extraer_registros()){
            $datos .= 
            "<div id='comentario'>
                <div id='div_encabezado'>
                    <b>Usuario: $comentario[0] </b>
                    <b id='lbl_fecha'>$comentario[1]</b>
                </div>
                    <p id='lbl_comentario'>$comentario[2] </p>
            </div>";
        }
        return $datos;
    }

    function verificarUsuario($conexion,$usu,$contra){
        $verificar = "SELECT * FROM tbl_usuarios WHERE usuario = '$usu' AND clave = '$contra'";
        $conexion->consulta($verificar);
        $registro = $conexion->extraer_registros();

        if( $registro != null){
            $mensaje = "Inicio de Seccion con exito.";
            $_SESSION['id'] = $registro[0];
            $_SESSION['usuario'] = $registro[1];
        }
        else{
            $mensaje = "Usuario o contrasena incorrecta.";
        }
        
        echo $mensaje;
    }
    
    if(isset($_POST['usuario'])){
        $usu = $_POST['usuario'];
        $contra = $_POST['clave'];
        verificarUsuario($conexion, $usu, $contra);
    }

    function posterComentario($conexion,$comentarioUsuario){
        date_default_timezone_set('America/Costa_Rica');
        $fecha = date('Y-m-d h:i:s a', time());
        $idUsuario = $_SESSION['id'];
        $poster = "INSERT INTO tbl_comentarios (fecha, comentario, id_usuario) VALUES ('$fecha', '$comentarioUsuario', '$idUsuario')";
        $conexion->consulta($poster);
    }

    if(isset($_POST['comentario'])){
        posterComentario($conexion,$_POST['comentario']);
    }

    if(isset($_GET['salir'])){
        session_destroy();
    }
?>