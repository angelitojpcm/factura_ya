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

¡Tu contribusción es valiosa para mejorar **¡Factura Ya!**! Si deseas contribuir, sigue las mejores prácticas de desarrollo de software y documenta cualquier cambio que realices. Utiliza GitHub para gestionar las contribuciones.

**Recuerda:** Al contribuir, asegúrate de hacer referencia a Angel, el creador original del proyecto.

## Licencia

**Derechos de autor ©2023 Angel Calderon Mantilla**

_Este software se ofrece como Software Libre y se concede permiso, de forma gratuita, a cualquier persona que obtenga una copia de este software y de los archivos de documentación asociados (el "Software") para tratarlo sin restricciones. Esto incluye, entre otros, los derechos para usar, copiar, modificar, fusionar, publicar, distribuir y sublicenciar copias del Software, ya sea de forma gratuita o mediante compensación financiera._

Las siguientes condiciones deben cumplirse:

1. _El aviso de copyright anterior y este aviso de permiso se incluirán en todas las copias o partes sustanciales del Software._
2. _Si decides redistribuir el Software de forma gratuita o mediante compensación financiera, siempre se deberá hacer referencia al autor original, Angel Calderon Mantilla **(@angelitojpcm)**._

> :warning:
**EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIALIZACIÓN, IDONEIDAD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO LOS AUTORES O PROPIETARIOS DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE NINGUNA RECLAMACIÓN, DAÑO U OTRA RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO, AGRAVIO O DE OTRA MANERA, DERIVADA DE, FUERA DE O EN RELACIÓN CON EL SOFTWARE O EL USO U OTROS TRATOS EN EL SOFTWARE.**