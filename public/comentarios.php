<?php
    include_once("mantenimiento.php"); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Laboratorio">
    <meta name="keywords" content="HTML5, CSS3, Jquery">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
    <title>UNA</title>
</head>
<body>
    <div id="div_base">
        <div id="div_usuario">
            <img id="img_user" src="rsc/user.png">
            <b id="lbl_usuario">Bienvenido/a
                <?php
                    if(isset($_SESSION['usuario'])){
                        echo $_SESSION['usuario'];
                    }
                    else{
                        header("location: login.php");
                    }
                ?>
            </b>
            <input id="btn_cerrarsesion" name="btn_cerrarsesion" type="button" title="Cerrar Sesion"
                value="Cerrar Sesion">
        </div>
        <div id="div_comentario">
            <div id="div_encabezado">
                <b>Agregar Comentario</b>
            </div>
            <form id="frm_comentario">
                <textarea id="txt_comentario" name="txt_comentatio" type="text" value=""
                    placeholder="Escriba su comentario..."></textarea>
                <input id="btn_poster" name="btn_poster" type="button" value="Poster">
            </form>
        </div>
        <div id="div_cometarios">
            <div id="div_encabezado">
                <b>Cometarios posteados</b>
            </div>
            <div id="comentarios">
                <?php echo obtenerComentario($conexion);?>
            </div>
        </div>
    </div>
    <span id="msjbox" style="color: #F00;"></span>
    <footer>
        <p>UNIVERSIDAD NACIONAL. SISTEMA DE COMENTARIO. JOSUE NAVARRO GAMBOA. ©2022</p>
    </footer>
</body>

</html>