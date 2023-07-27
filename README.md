# laravel_10_separador_de_miles_y_decimales 
 
## Introducción
Proyecto laravel 10 con libreria MaskJs y Devextreme datagrid.

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
Cada pagina, tiene un pequeña descripcion, la cual sera util para que puedas entender lo que realiza cada formulario.

En dado caso que necesites reutilizar el codigo, lo minimo necesario, sera copiar `scripts.js` y `imask.js`,
esto lo encontraras en la ruta `public/assets`.

## Como utilizarlo:
En dado caso que requieras utilizar la libreria `imask.js`, deberas tener en cuenta que se ha limitado su funcionalidad para aceptar ciertos caracteres para los decimales y el separador de miles.

En este ejemplo, veremos como vincular la libreria en un input, el cual acepta numeros, donde el separador de miles es un punto, y el separador de decimal, es una coma.

Si necesitas cargar un valor previo, puedes utilizar el atributo value sin problema alguno.

### Input mask
Para crear un input con un formateador de numeros, debemos asumir que debe ser de tipo `text` y asignar la clase `input-mask`, esto por defecto, trae el separador de miles con punto `.` y el de decimales con coma `,`.

En dado caso que requieras invertir los valores, puedes utilizar los atributos `data-thousands-separator` (miles) y `data-decimal-separator` (decimales) para intercambiar entre coma y punto.

Para que el valor ingresado en nuestro input principal, se vea reflejado en nuestro otro input que se encuentra escondido, debemos asignar el atributo `data-input-value` con la referencia al input oculto, en este caso es una clase llamada `.numero-1`.


### Input hidden
Es muy necesario, ingresar un input tipo `hidden`, el cual sera utilizado para almacenar el valor limpio (valido para realizar calculos en PHP,JS,DB), asumiendo que es un numero aceptado dentro de diferentes lenguajes, se podria decir que este valor es el que se enviara el backend.


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

# Referencias
- https://imask.js.org/
- https://laravel.com/docs/10.x/releases

## Bitácora

Fecha | Descripcion | Acciones
| :-- | :-: | :-:
18-05-2022 18:11 | instalación de proyecto | Ejecutar _composer install_, _php artisan migrate:fresh_ y npm run dev (_opcional_)