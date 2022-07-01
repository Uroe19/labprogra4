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
      <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="h-screen bg-gray-500 text-gray-800 sm:py-12 space-y-40">
    <div class="relative py-3 sm:max-w-xl mx-auto text-center">
        <span class="text-2xl font-light text-neutral-900">Inicio de Sesion</span>
      <div class="relative mt-4 bg-blue-400 shadow-md sm:rounded-lg text-left">
        <div class="h-2 bg-indigo-600 rounded-t-md">
        </div>
          <div class="py-6 px-8">
            <label class="block font-semibold">Usuario<label>
            <input id="txt_usuario" name="txt_usuario" title="Usuario" type="text" placeholder="Usuario" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
            <label class="block mt-3 font-semibold">Contraseña<label>
            <input id="txt_contrasena" name="txt_contrasena" title="Contraseña" type="password" placeholder="Contraseña" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
            <div class="flex justify-between items-baseline text-center">
              <input id="btn_iniciarsesion" name="btn_iniciarSesion" type="button" title="Iniciar Sesion" class="mt-4 bg-blue-600 text-white py-2 px-6 rounded-lg"
                value="Iniciar Sesion">
            </div>
          </div>
      </div>
    </div>
          <span id="msjbox" style="color: #F00;"></span>
  </body>
</html>