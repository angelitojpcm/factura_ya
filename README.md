# Proyecto de Facturación - Documentación Mejorada

¡Bienvenido al proyecto **¡Factura Ya!**! Este sistema de facturación está construido con PHP puro, siguiendo el patrón de diseño MVC (Modelo-Vista-Controlador) y utilizando PDO para la conexión a la base de datos MySQL.

## Estructura del Proyecto

El proyecto cuenta con una organización clara y modular en sus directorios y archivos:

- `core/`: Contiene archivos esenciales como el autoload, la conexión a la base de datos, las rutas y el manejador de errores.
- `controllers/`: Aquí se encuentran los controladores que gestionan las operaciones de inicio de sesión y facturación.
- `models/`: Contiene los modelos que representan a usuarios y facturas en la base de datos.
- `views/`: Incluye las vistas que ofrecen la interfaz de usuario para el inicio de sesión, facturación y manejo de errores.
- `public/`: Almacena archivos públicos como estilos CSS, scripts de JavaScript y el punto de entrada de la aplicación.
- `.htaccess`: Configura el servidor web Apache para una mejor operación.
- `README.md`: Documenta detalladamente el proyecto.

## Uso

Para comenzar a utilizar este proyecto, sigue estos pasos:

1. **Instalación del Servidor Web**: Asegúrate de tener un servidor web con soporte para PHP y una base de datos MySQL.
2. **Configuración de la Base de Datos**: En el archivo `core/mysql.php`, configura la conexión a la base de datos.
3. **Iniciar el Servidor Web**: Inicia el servidor web y accede a la aplicación a través de tu navegador web.

## Contribuir

Si deseas contribuir a este proyecto, tu ayuda es bienvenida. Sigue las mejores prácticas de desarrollo de software y documenta cualquier cambio que realices. Utiliza GitHub para gestionar las contribuciones.

## Licencia

Este proyecto está licenciado bajo la licencia MIT, lo que significa que puedes utilizar, modificar y distribuir el código de acuerdo con los términos de dicha licencia.

¡Gracias por contribuir y usar **¡Factura Ya!**!