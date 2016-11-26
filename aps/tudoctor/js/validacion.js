//URL
var http = location.protocol;
var slashes = http.concat("//");
var baseUrl = slashes.concat(window.location.hostname);
if (baseUrl.indexOf('.minmujer.gob.ve') == -1) {
    var pathArray = window.location.pathname.split('/');
    var ruta = '/' + pathArray[1]; // /tui
    baseUrl = $(location).attr('href').replace($(location).attr('pathname'), ruta);
}

/*
 * FUNCION QUE BUSCA EN SAIME POR NUMERO DE CEDULA Y NACIONALIDAD
 */
function buscarPersonaSaime(nacionalidad, cedula) {
    //~ if (nacionalidad == 'SELECCIONE') {
        //~ bootbox.alert('Verifique que la nacionalidad no esten vacios');
        //~ return false;
    //~ }
    //~ if (cedula == '') {
        //~ bootbox.alert('Verifique que la cédula no esten vacios');
        //~ return false;
    //~ }
    $.ajax({
        url: baseUrl + "/ValidacionJs/buscarSaime",
        async: true,
        type: 'POST',
        data: 'nacionalidad=' + nacionalidad + '&cedula=' + cedula,
        dataType: 'json',
        success: function(datos) {
            if (!datos) {
                bootbox.alert('Debe Completar el campo Cédula');
                $('.limpiar').val('');
                $('#Beneficiario_genero').val('');
            } else {
                if (datos['intcedula'] == null) {
                    bootbox.alert('El número de Cédula no existe');
                    //$('#Beneficiario_genero').val('');
                    //$('.limpiar').val('');
                    $('#Visitantes_nombre').attr('readonly', false);
                    $('#Visitantes_apellido').attr('readonly', false);
                    $('#Visitantes_fecha_nacimiento').attr('readonly', false);
                } else {
                    $('#Visitantes_nombre').val(datos['strnombre_primer']+ ' '+datos['strnombre_segundo']);
                    $('#Visitantes_apellido').val(datos['strapellido_primer']+ ' '+datos['strapellido_segundo']);
                    
                    $('#Visitantes_fecha_nacimiento').val(datos['dtmnacimiento']);
                    if (datos['strgenero'] == 'F') {
                        $('#Visitantes_sexo').val('F');
                    } else {
                        $('#Visitantes_sexo').val('M');
                    }

                }
            }
        },
        error: function(datos) {
            bootbox.alert('Ocurrio un error');
        }
    })
}
/*
 * FUNCION PARA LIMPIAR TODOS AQUELLOS CON CLASE limpiar
 */
function Limpiar() {
    $('.limpiar').val('');
    $('#Beneficiario_genero').val('');
}