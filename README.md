# Sistema de Inventario en Laravel

Este es un sistema simple de inventario construido con Laravel 11.9, donde los usuarios pueden registrarse, iniciar sesión, y gestionar sus artículos de inventario.

## Requisitos

- PHP >= 8.2
- Composer
- Node.js y npm
- Base de datos (SQLite es suficiente para este proyecto)

## Instalación mediante Docker
Se recomienda usar Docker para facilitar la configuración del entorno. Si no tienes Docker instalado, puedes descargarlo desde [docker.com](https://www.docker.com/get-started).

## Instalación del Proyecto

### Clonar el repositorio:
* git clone https://github.com/miguel-laraobregon/pruebaInventarioLayer7.git
* cd pruebaInventarioLayer7

### Instalar dependencias:
* composer install

### Configurar el entorno:
- Copia el archivo .env.example a .env:
    - cp .env.example .env

- Configura tu conexión a la base de datos en el archivo .env. Si estás utilizando SQLite, asegúrate de tener configurada la ruta correcta(en caso de ser necesario):
    - DB_CONNECTION=sqlite
    - DB_DATABASE=/ruta/a/tu/base_de_datos/database.sqlite

### Generar la clave de la aplicación:
* php artisan key:generate

### Ejecutar las migraciones:
* php artisan migrate

### Iniciar el servidor local:
* php artisan serve 

### La aplicación estará disponible en http://localhost:8000.

### Ejecutar test:
* php artisan test

## Funcionalidades

- **Registro de usuarios**
- **Inicio de sesión y cierre de sesión**
- **Gestión de artículos de inventario:**
  - Crear nuevos artículos
  - Editar artículos existentes
  - Eliminar artículos
  - Ver lista de artículos
  - Ver detalles de un artículo

## Nota:
Para el registro y acceso de usuarios se decidio utilizar el starter-kit proporcionado por laravel, **Braaze - Blade**