# POS SoftCo - Punto de Venta para Cafeterías.

Este es un sistema de Punto de Venta (POS) basado en la web, construido con Laravel, ideal para gestionar ventas, inventario, clientes y productos en pequeños negocios, con una personalización especial para cafeterías.

## Requisitos Previos

- **[XAMPP](https://www.apachefriends.org/es/download.html)** con **PHP 8.2** o superior.
- **[Composer](https://getcomposer.org/download/)** (Gestor de dependencias de PHP).
- **[Git](https://git-scm.com/downloads)** (Sistema de control de versiones).

## Guía de Instalación Rápida

1.  Clonar el Repositorio.

Navega a tu carpeta de proyectos (ej. `C:/xampp/htdocs`) y clona el repositorio.

```bash
git clone https://github.com/andromatt/softco-pos.git
```

```bash
cd softco-pos
```

2.  Abra  el  repositorio  en  su  editor  de  código  favorito  (**Visual  Studio  Code**)

```bash
code .
```


3.  Ejecute  la  aplicación  **XAMPP**  e  inicie  los  servicios  de  **Apache**  y  **MySQL**


4.  Abra  una  nueva  terminal  en  su  editor.


5.  Compruebe  de  que  tiene  instalado  todas  dependencias  correctamente,  ejecute  los  siguientes  comandos:  **(Ambos  comandos  deberán  ejecutarse  correctamente  -  ejecutar  en  la  terminal)**

```bash

php  --version

```

```bash

composer  --version

```


6.  Ahora  ejecute  los  comandos  para  la  configuración  del  proyecto  (**ejecutar  en  la  terminal**):


-  Este comando instalará todas las dependencias de composer.

```bash

composer install

```

-  En el directorio raíz encontrará el arhivo **.env.example**, dupliquelo, al archivo duplicado cambiar de nombre como **.env**, este archivo se debe modificar según las configuraciones de nuestro proyecto. A continuación se muestran como debería quedar:

```bash

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=db_pos

DB_USERNAME=root

DB_PASSWORD=tu_contraseña_de_mysql_si_tienes_una

```

-  Ejecutar el comando para crear la Key de seguridad

```bash

php artisan key:generate

```


-  Correr la migraciones del proyecto

```bash

php artisan migrate

```

-  Ejecute los seeders, esto creará un usuario administrador, puede revisar las credenciales en el archivo (**database/seeders/UserSeeder**)

```bash

php artisan db:seed

```

-  Corra comando para crear el enlace simbólico

```bash

php artisan storage:link

```

-  Ejecute el proyecto

```bash

php artisan serve

```

## Licencia

-  Este proyecto está licenciado bajo la Licencia MIT.

-  Obtenga más información sobre esta licencia [MIT license](https://opensource.org/licenses/MIT).
