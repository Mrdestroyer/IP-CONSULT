
$(document).ready( function(){
    console.log("Hola");

    const url_api = "https://ipwhois.app/json/";
    const btn_consulta = $("#btn_consulta");
    const input_ip = $("#ip");

    btn_consulta.click( function(){
        var direccion = input_ip.val().trim();
        
        var correcta = validaDireccionIp(direccion);
        if(correcta){
            getDatos(url_api+direccion);
        }else{
            console.log("Incorrecta");
        }
    });

    function getDatos(url){
        console.log(url);

        //var continent = $("#continente");

        $.getJSON( url, function( data ) {
            var items = [];
            console.log(data);
           // continent.text(data['continent']);

            $("#continente").text(data['continent']);
            $("#pais").text(data['country']);
            $("#ciudad").text(data['city']);
            $("#capital").text(data['country_capital']);
            $("#codigo").text(data['country_code']);
            $("#bandera").attr("src", data['country_flag']);
            $("#prefijo").text(data['country_phone']);
            $("#moneda").text(data['currency']);
            $("#isp").text(data['isp']);
            $("#region").text(data['region']);
            $("#organizacion").text(data['org']);
            $("#zona_horaria").text(data['timezone_name']);

        });
    }

});

function validaDireccionIp(direccion){

    var formatoIp = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;

    if(direccion.match(formatoIp)){
        return true;
    }else{
        return false;
    }
}

