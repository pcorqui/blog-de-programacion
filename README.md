Tutorial de Laravel para entender como funciona el framework(para novatos) utilizando la ultima version de laravel

Este tutorial es basico obviamente(ya sabes es que soy medio lento).

Laravel es un framewok que sigue la estructura del patrin MVC esta hecha para hacerte mas fácil el trabajo papu(un framework es como tu chamba tiene ciertas reglas que tienes que cumplir para que funcione).

Algunas cosas basicas que se deben saber
1.-Configurar el entorno(osea instalar el software que ocuparas)
2.-Crear un proyecto en laravel
3.-comprender la esturctura de MVC

Primero lo primero:
Descargar las herramientas necesarias-----
1.-Xampp(googlealo vago)

2.-composer
necesitas instalar PHP primero o el PHP engine o esto no va a funcionar Composer es un gestor de dependencias(no se como explicarlo de manera que se entienda)
pero te ayudara a instalar dependecias(codigos de otras personas) incluyendo laravel para que esto funcione

3.-Descarga visual studio Code para editar el codigo o puedes ocupar note++ --personalmente no me gusta-- o incluso netbeans(ese si me gusta pero no lo uso)
visual estudio tiene plugins que podrian ayudar a debbugear y corrrer comandos buscare entre los mejores y lo agrego mientras escogue tu IDE no hay uno mejor o pero es como los pokemos depende que que prefieras incluso si prefieres block de notas(aun que entre los pokemones si hay mejor y peor pero no estas lista para esta conversacion).

4.-instalar Laravel https://laravel.com/docs/8.x#installing-laravel aqui te dejo un link
Pero basicamente dice corre el siguiente comando: composer global require laravel/installer y ya quedo.

5.- ahora si, sobre alguna carpeta donde vayas a guardar el proyecto corre el siguiente comando--- laravel new NombreDelProyecto --- por NombreDelProyecto es un nombre que tu quieras elegir, si todo salio bien te creara una carpeta con NombreDelProyecto y muchas carpetas adentro.



# **Estructura de carpetas**(las muchas carpetas adentro) 

## La carpeta raiz
-carpeta App
    Esta carpeta contendra nuestros modelos y controladores cuando las creemos contiene nuestro codigo fuente, dentro contiene otras subcarpetas que aun no comprendo pero ya se veran despues.
        
        - carpeta Http/
            en esta carpeta encontraremos dos carpetas mas Controllers y Models (esto solo en laravel 8)
            
            - carpeta Controllers
                aqui va toda la logica de la aplicación donde se manejan las solicitudes entrantes a nuestra aplicacion
            
            - carpeta Models
            Los modelos de datos son manejados por el ORM eloquent, este brinda una forma facil de trabajar con la base de datos sin tener que complicarse las cosas con sql.
    
    - Carpeta config
    contiene los archivos de configuracion para nuestro proyecto
    
    - Carpeta database
    Esta carpeta contendra todos los archivos relacionados a la base datos(obvio) como es la estructura(si puedes crear la base de datos directamente desde el codigo), los archivos de migracion y las semillas(para crear datos de prueba)
    
    - Carpeta public
    Aqui esta el archivo index.php que es el punto de entrada para todas las solicitudes a nuestra aplicacion, aqui tambien van los archivos CSS y JS
    
    - Carpeta routes
    Esta carpeta contiene las URL para nuestro proyecto dentro de ella vienen los archivos web.php y api.php vienen otros dos pero solo utilizaremos estos.
    
    - Carpeta de recursos
    Esta carpeta almacena las vistas de nuestra aplicacion web(los html)
   
   # Configuracion del proyecto para correr en tu entorno local.
   Todas las configuraciones estan en el archivo .env en la carpeta del proyecto(buscare como poner capturas de pantalla pa' mostrar como jala)
   
   
    
    
    
    
    


repositorio para la creacion de un blog para compartir contenido de programacion y mejorar las habilidades
