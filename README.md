# Sistema para gestión de exámenes finales

## Práctica profesional - Analista de Sistemas - ISFT 38
## *Mariano Chiqueta*

---

## Descripción
Backend y Frontend para gestión de exámenes finales. El proyecto cuenta con lo siguiente:
1. Sistema de autenticación y roles de usuario: guest/invitados y usuarios registrados.
2. Sistema de notificaciones por mail
3. Backend: ABM para la gestión de la información relacionada a los exámenes (usuarios registrados).
4. Frontend: Formulario y vista para consulta de datos (invitados o usuarios registrados).

## Setup

### Requisitos:
Se necesitan tener instaladas las siguientes herramientas
- Composer
- Laravel
- MySQL
- PHP

### Pasos de instalación:

1. Clonar este repositorio con `git clone https://mariano_chiqueta@bitbucket.org/mariano_chiqueta/trabajo-final.git`.

Abrir una terminal y navegar hasta la carpeta donde fue clonado el proyecto. Una vez en el directorio, seguir los siguientes pasos:

2. Ejecutar el comando `composer install` para instalar las dependencias del proyecto.

3. Copiar el contenido del archivo .env.example a .env y editar la configuración de la base de datos según corresponda; editar la configuración del servidor de correo para poder utilizar las notificaciones.

4. Correr el comando `php artisan key:generate`

5. Ejecutar el comando `php artisan migrate --seed` para generar las tablas en la base de datos y seedearla con los datos de prueba.

6. Iniciar el servidor con el comando `php artisan serve`. Ingresar a la URL de la aplicación.
