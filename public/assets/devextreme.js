$(() => {

    /**
     * primero seteamos la localizacion, esto es super util a la hora de formatear los numeros
     * ya que mediante esta configuracion, automaticamente el separador de miles se transformara en punto 
     * y el de decimal en coma.
     */

    DevExpress.localization.locale('es');

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
            load: function () {
                return $.getJSON(container.getAttribute('data-link'))
                    .fail(function () { throw "Data loading error" });
            },
            insert: function (values) {
                console.log('insert', values)
                /* var deferred = $.Deferred();
                $.ajax({
                    url: "https://mydomain.com/MyDataService/",
                    method: "POST",
                    data: JSON.stringify(values)
                })
                .done(deferred.resolve)
                .fail(function (e) {
                    deferred.reject("Insertion failed");
                });
                return deferred.promise(); */
            },
            remove: function (key) {
                console.log('remove')
                /* var deferred = $.Deferred();
                $.ajax({
                    url: "https://mydomain.com/MyDataService/" + encodeURIComponent(key),
                    method: "DELETE"
                })
                .done(deferred.resolve)
                .fail(function (e) {
                    deferred.reject("Deletion failed");
                };
                return deferred.promise(); */
            },
            update: function (key, values) {
                console.log('update')
                /* var deferred = $.Deferred();
                $.ajax({
                    url: "https://mydomain.com/MyDataService/" + encodeURIComponent(key),
                    method: "PUT",
                    data: JSON.stringify(values)
                })
                .done(deferred.resolve)
                .fail(function (e) {
                    deferred.reject("Update failed");
                };
                return deferred.promise(); */
            }
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
