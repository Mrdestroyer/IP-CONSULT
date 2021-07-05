
$(document).ready( function(){
    console.log("Hola");

    const url_api = "http://ipwhois.app/json/";
    const btn_consulta = $("#btn_consulta");
    const input_ip = $("#ip");

    btn_consulta.click( function(){
        var direccion = input_ip.val();
        
        var correcta = validaDireccionIp(direccion);
        if(correcta){
            getDatos(url_api+direccion);
        }else{
            console.log("Incorrecta");
        }
    });

    function getDatos(url){
        console.log(url);
        $.getJSON( url, function( data ) {
            var items = [];
            console.log(data);
            

            // $.each( data, function( key, val ) {
            //   items.push( "<li id='" + key + "'>" + val + "</li>" );
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

