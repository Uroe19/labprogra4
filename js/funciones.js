$(document).ready(function(){

    $("#btn_iniciarsesion").click(function(){
        if(!validar_login()){
            verificarUsuario($("#txt_usuario").val(),$("#txt_contrasena").val());
        }
        else{
            alert("Tiene algun espacio vacio.");
        }
    })

    $("#btn_poster").click(function(){
        if(!validar_comentario()){
            posterComentario($("#txt_comentario").val());
            limpiarcomentario();
        } 
        else{
            alert("Debe de escribir un comentario primero para postearlo.");
        }
    })

    $("#btn_cerrarsesion").click(function(){
        $.ajax({
            type: 'GET',
            url: 'mantenimiento.php',
            data: {salir: true}
        })
        window.location.replace("http://localhost/act6/login.php");
    })

})

function verificarUsuario(usu, contra){
    $.ajax({
        type: 'POST',
        url: 'mantenimiento.php',
        data: { 
            usuario: usu,
            clave: contra
        }
    }).done(function(mensaje){
        window.location.replace("http://localhost/act6/comentarios.php");
    }).fail(function(jqXHR, textStatus, errorThrow){
        $("#msjbox").html(textStatus + ": Recurso " + errorThrow);
    });
}

function posterComentario(comen){
    $.ajax({
        type: 'POST',
        url: 'mantenimiento.php',
        data: { 
            comentario: comen
        }
    }).done(function(){
        $("#comentarios").load(" #comentarios");
    }).fail(function(jqXHR, textStatus, errorThrow){
        $("#msjbox").html(textStatus + ": Recurso " + errorThrow);
    });
}

function validar_login(){
    var vacio = false;
    $("#txt_usuario, #txt_contrasena").each(function(){
        if($(this).val() == ""){
            vacio = true;
        }
    });
     return vacio;
};

function validar_comentario(){
    var vacio = false;
    $("#txt_comentario").each(function(){
        if($(this).val() == ""){
            vacio = true;
        }
    });
     return vacio;
};

function limpiarcomentario(){
    $("#txt_comentario").val("");
    $("#txt_comentario").focus();
}