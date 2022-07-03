<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Simulacro de Laboratorio">
    <meta name="keywords" content="HTML5, CSS3, Jquery">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
    <title>UNA</title>
</head>
<body>
    <div id="div_baselogin">
      <div id="div_usulogin">
        <h2>Bienvenido</h2>
      </div>
      <div id="div_img">
          <img class="imglogo" src="rsc/Logo-UNA.png">
      </div>
      <form id="frm_login">
            <div>
                <input class="label" id="txt_usuario" name="txt_usuario"  type="text" value="" title="Usuario" placeholder="Usuario">
                <input class="label" id="txt_contrasena" name="txt_contrasena"  type="password" value="" title="Contraseña" placeholder="Contraseña"> 
                <input class="button" id="btn_iniciarsesion" name="btn_iniciarSesion" type="button" title="Iniciar Sesion" value="Iniciar Sesion">
            </div>
      </form>
    </div>
    <span id="msjbox" style="color: #F00;"></span>
</body>
</html>