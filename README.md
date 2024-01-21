# ¡Factura Ya!

Este es un proyecto de facturación construido con PHP puro, siguiendo el patrón de diseño MVC (Modelo-Vista-Controlador) y utilizando PDO para la conexión a la base de datos MySQL.

## Estructura del Proyecto

El proyecto tiene la siguiente estructura de directorios y archivos:

- `core/`: Contiene los archivos esenciales para el funcionamiento de la aplicación, como el autoload, la conexión a la base de datos, las rutas y el manejador de errores.
- `controllers/`: Contiene los controladores de la aplicación, que manejan las operaciones de inicio de sesión y facturación.
- `models/`: Contiene los modelos de la aplicación, que representan a los usuarios y las facturas en la base de datos.
- `views/`: Contiene las vistas de la aplicación, que muestran la interfaz de usuario para el inicio de sesión, la facturación y los errores.
- `public/`: Contiene los archivos públicos de la aplicación, como los estilos CSS, los scripts de JavaScript y el punto de entrada de la aplicación.
- `.htaccess`: Configura el servidor web Apache.
- `README.md`: Documenta el proyecto.

## Uso

Para usar este proyecto, primero debe instalar un servidor web con soporte para PHP y una base de datos MySQL. Luego, debe configurar la conexión a la base de datos en el archivo `core/mysql.php`.

Una vez que haya configurado la conexión a la base de datos, puede iniciar el servidor web y acceder a la aplicación a través de su navegador web.

## Contribuir

Si desea contribuir a este proyecto, puede hacerlo a través de GitHub. Por favor, asegúrese de seguir las mejores prácticas de desarrollo de software y de documentar cualquier cambio que haga.

## Licencia

Este proyecto está licenciado bajo la licencia MIT.