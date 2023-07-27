$(() => {
    /**
     * primero seteamos la localizacion, esto es super util a la hora de formatear los numeros
     * ya que mediante esta configuracion, automaticamente el separador de miles se transformara en punto 
     * y el de decimal en coma.
     */
    DevExpress.localization.locale(navigator.language);

    /**
     * 
     *  Para aplicar estas reglas debemos definir como numerico el tipo de dato
     *  dataType: "number"
     * 
     *  Definimos una mascara, la cual sera utilizada para interpretar el valor en la tabla
     *  format : "#,##0.##"
     *  
     *  Es utilizado al momento de editar un campo dentro de la misma tabla.
     *  editorOption: {
     *      format: {
     *          type: "fixedPoint",     Indicamos si el numero tomara en consideracion los decimales       
     *          precision: 2,           Definimos la cantidad de decimales validos al momento de editar o mostrar los campos en la tabla
     *      }
     *  }
     **/

    const container = document.querySelector('#gridContainer');

    $(container).dxDataGrid({
        dataSource: new DevExpress.data.CustomStore({
            key: "id",
            load: function () {
                return $.getJSON(container.getAttribute('data-link'))
                    .fail(function () { throw "Data loading error" });
            },
            insert: function (values) {
                return sendRequest(container.getAttribute('data-store'), "POST", {
                    numero_string1: values.numero_string1,
                    numero_float1: values.numero_float1,
                    numero_int1: values.numero_int1,
                    numero_double1: values.numero_double1
                }); 
            },
            remove: function (key) {
                return sendRequest(container.getAttribute('data-delete'), "DELETE", {
                    id: key
                });
            },
            update: function (key, values) {
                //actualizamos el registro en DB, posteriormente la devextreme recarga la grilla
                //realizando una nueva peticio, es aqui donde veremos el dato actualizado
                return sendRequest(container.getAttribute('data-update'), "PUT", {
                    id: key,
                    numero_string1: values.numero_string1,
                    numero_float1: values.numero_float1,
                    numero_int1: values.numero_int1,
                    numero_double1: values.numero_double1
                });    
            }, 
        }),
        keyExpr: 'id',
        showBorders: true,
        paging: {
            enabled: false,
        },
        editing: {
            mode: 'row',
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true,
        },
        columns: [
            {
                dataField: 'numero_string1',
                caption: 'String 1',
                dataType: "text",
            },
            {
                dataField: 'numero_float1',
                caption: 'Float 1',
                dataType: "number",
                format: "#,##0.##",
                editorOptions: {
                    format: {
                        type: "fixedPoint",
                        precision: 2,
                    },
                }
            },
            {
                dataField: 'numero_int1',
                caption: 'Int 1',
                dataType: "number",
                format: "#,##0.##",
                editorOptions: {
                    format: {
                        type: "fixedPoint",
                        precision: 2,
                    },
                }
            },
            {
                dataField: 'numero_double1',
                caption: 'Double 1',
                dataType: "number",
                format: "#,##0.##",
                editorOptions: {
                    format: {
                        type: "fixedPoint",
                        precision: 2,
                    },
                },
            },
        ],
        onSaved(data) {
            console.log(data);
        }
    });

    $('#clear').dxButton({
        text: 'Clear',
        onClick() {
            $('#events ul').empty();
        },
    });
});

function sendRequest(url, method, data) { // función para solicitudes de devxtreme

    var d = $.Deferred();
    method = method || "GET";
    $.ajax(url, {
        method: method || "GET",
        data: data,
        cache: false,
        xhrFields: {
            withCredentials: true
        }
    }).done(function (result) {
        /* d.resolve(method === "GET" ? result.data : result); */
        d.resolve(result);
    }).fail(function (xhr) {
        console.log('Error al obtener los datos');
        d.reject(xhr.responseJSON ? xhr.responseJSON.Message : xhr.statusText);
    });
    return d.promise();
}
