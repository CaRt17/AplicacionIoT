$(document).ready(function() {
    var nombre = $("#user").val();
    var email = $("#mail").val();
    var clave = $("#pw").val();
    $("#btnRegistrar").click(function(e){
        console.log("hola");
        $("#menEx").css('display', 'block');
        //e.preventDefault();
        $.ajax({
            url: 'PHP/registro.php',
            type: 'POST',
            data: {'user': nombre, 'mail': email, 'pw': clave},
            succes: function(resp){
                if(resp == 1){
                    console.log("hola2");
                    
                }else{
                    console.log(resp);
                }
            }
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });


});