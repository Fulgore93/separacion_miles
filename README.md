# laravel_10_separador_de_miles_y_decimales 
 
## Introducción
Proyecto laravel 10 con librería MaskJs y Devextreme datagrid.

## Instalación
Para instalar esto, debes seguir las siguientes indicaciones
- Tener php 8.1+ y composer acorde a la versión de php
- composer install
- Tener Node JS 14+ para ejecutar npm
- npm install (ver en tiempo real la pagina)
- cp .env.example .env
- php artisan key:generate
- php artisan migrate

# Ejemplos de uso
Para ver los ejemplos de uso, puedes hacer lo siguiente:
- Ir a la ruta / y navegar entre los enlaces
- puedes consultar el archivo web.php para más información sobre las rutas.

# Instrucciones
## Para conocer mas acerca de los ejemplos
Cada pagina, tiene un pequeña descripción, la cual sera util para que puedas entender lo que realiza cada formulario.

En dado caso que necesites reutilizar el código, lo mínimo necesario, sera copiar `script.js` y `imask.js`,
esto lo encontraras en la ruta `public/assets/separador-miles`.

## Como utilizarlo:
En dado caso que requieras utilizar la librería `imask.js`, deberás tener en cuenta que se ha limitado su funcionalidad para aceptar ciertos caracteres para los decimales y el separador de miles.

En este ejemplo, veremos como vincular la librería en un input, el cual acepta números, donde el separador de miles es un punto, y el separador de decimal, es una coma.

Si necesitas cargar un valor previo, puedes utilizar el atributo value sin problema alguno.

### Input mask
Para crear un input con un formateador de números, debemos asumir que debe ser de tipo `text` y asignar la clase `input-mask`, esto por defecto, trae el separador de miles con punto `.` y el de decimales con coma `,`.

En dado caso que requieras invertir los valores, puedes utilizar los atributos `data-thousands-separator` (miles) y `data-decimal-separator` (decimales) para intercambiar entre coma y punto.

Para que el valor ingresado en nuestro input principal, se vea reflejado en nuestro otro input que se encuentra escondido, debemos asignar el atributo `data-input-value` con la referencia al input oculto, en este caso es una clase llamada `.numero-1`.


### Input hidden
Es muy necesario, ingresar un input tipo `hidden`, el cual sera utilizado para almacenar el valor limpio (valido para realizar cálculos en PHP,JS,DB), se podría decir que este valor es el que se enviara el backend.


```html
<!-- input mask -->

<input 
    class="input-mask" 
    value="{{ $numero->numero_double1 }}" 
    data-input-value='.numero-1' 
    data-thousands-separator='.' 
    data-decimal-separator=',' 
    type="text"
>

<!-- input hidden -->

<input 
    type="text" 
    style="display:none" 
    class="numero-1" 
    value="{{ $numero->numero_double1 }}" 
    name="numero_1" 
>
```

### Devextreme

Dentro de este apartado, existe una funcionalidad en la devextreme, que nos permite agregar, editar o simplemente, mostrar números en diferentes formatos, en este caso utilizaremos el separado de miles como `.` y el decimal como `,`.

Lo primero que necesitamos hacer, es importar la librería, tanto css como js.

```html

<link href="https://cdn3.devexpress.com/jslib/23.1.3/css/dx.light.css">

<body>

    ...

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/dx.all.js"></script>
   <script src="https://cdn3.devexpress.com/jslib/23.1.3/js/localization/dx.messages.es.js"></script>

</body>
```
Posteriormente , debemos cambiar el idioma de la librería a español, para lograr esto, debemos agregar la siguiente linea de código.

```js
DevExpress.localization.locale(navigator.language);
```
Ahora lo que necesitaremos es definir ciertos parámetros dentro de las columnas,
en este ejemplo, el campo `salario` el cual es numérico, tiene un formato establecido y una propiedad `editorOptions`
en dado caso que se requiera editar directamente desde la tabla.

Luego de editar al gun campo o crear algún registro, donde el campo numérico se vea afectado, solo debemos enviar el dato directamente en la petición, ya que este mismo se encuentra limpio, osea es un numero valido, independiente de como se vea en la tabla.

```js
$('#gridContainer').dxDataGrid({

    //solo si requiere la modificacion o 
    //creacion de registro mediante la devextreme
    dataSource: new DevExpress.data.CustomStore({
        key: "id",
        load: function () {...},
        insert: function (values) {
            return sendRequest(url, "POST", {
                nombre: values.nombre,
                salario: values.salario,
            }); 
        },
        remove: function (key) {...},
        update: function (key, values) {...}, 
    }),
    ...
    columns: [
        {
            dataField: 'nombre',
            caption: 'Nombre',
            dataType: "text",
        },
        {
            dataField: 'salario',
            caption: 'Salario',
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
});

```


# Referencias
- https://imask.js.org/
- https://laravel.com/docs/10.x/releases

## Bitácora

Fecha | Descripción | Acciones
| :-- | :-: | :-:
18-05-2022 18:11 | instalación de proyecto | Ejecutar _composer install_, _php artisan migrate:fresh_ y npm run dev (_opcional_)